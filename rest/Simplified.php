<?php
/**
 * Simplified_Plugin
 *
 * @package   Simplified_Plugin
 * @author    Jacek Dobrowolski <jack@simplified.co>
 * @copyright 2022 Simplified
 * @license   GPL 2.0+
 * @link      https://simplified.com
 */

namespace Simplified_Plugin\Rest;

use Simplified_Plugin\Engine\Base;

/**
 * Example class for REST
 */
class Simplified extends Base {

	/**
	 * Initialize the class.
	 *
	 * @return void|bool
	 */
	public function initialize() {
		parent::initialize();

		\add_action( 'rest_api_init', array( $this, 'add_custom_stuff' ) );
	}

	/**
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function add_custom_stuff() {
		$this->add_custom_ruote();
	}


	/**
	 *
	 * @since 1.0.0
     *
     *  Make an instance of this class somewhere, then
     *  call this method and test on the command line with
     * `curl http://example.com/wp-json/simplified/v1/publish`
     * @return void
	 */
	public function add_custom_ruote() {

		\register_rest_route(
			'simplified/v1',
			'publish',
			array(
				'methods' => 'POST',
				'permission_callback' => function ($request) {
						return $request->get_header('Token') == \get_option(SIMPLONEAPP_PLUGIN_TEXTDOMAIN . '-api-token');
						},
				'callback'            => array( $this, 'publish_action' ),
				'args'                => array(
					'nonce' => array(
						'required' => false,
					),
				),
			)
		);

        \register_rest_route(
            'simplified/v1',
            'verify',
            array(
                'methods' => 'POST',
                'permission_callback' => function ($request) {
                    return $request->get_header('Token') == \get_option(SIMPLONEAPP_PLUGIN_TEXTDOMAIN . '-api-token');
                },
                'callback'            => array( $this, 'verify_action' ),
                'args'                => array(
                    'nonce' => array(
                        'required' => false,
                    ),
                ),
            )
        );

        \register_rest_route(
            'simplified/v1',
            'categories',
            array(
                'methods' => 'GET',
                'permission_callback' => function ($request) {
                    return $request->get_header('Token') == \get_option(SIMPLONEAPP_PLUGIN_TEXTDOMAIN . '-api-token');
                },
                'callback'            => array( $this, 'get_categories' ),
                'args'                => array(
                    'nonce' => array(
                        'required' => false,
                    ),
                ),
            )
        );

        \register_rest_route(
            'simplified/v1',
            'post_types',
            array(
                'methods' => 'GET',
                'permission_callback' => function ($request) {
                    return $request->get_header('Token') == \get_option(SIMPLONEAPP_PLUGIN_TEXTDOMAIN . '-api-token');
                },
                'callback'            => array( $this, 'get_post_types' ),
                'args'                => array(
                    'nonce' => array(
                        'required' => false,
                    ),
                ),
            )
        );
	}

	/**
	 * @since 1.0.0
	 * @param \WP_REST_Request $request Values.
	 * @return \WP_REST_Response|\WP_REST_Request
	 */
	public function publish_action( \WP_REST_Request $request ) {

		$params = $request->get_json_params();
		try {
			$this->validate_params($params);
		} catch (\Exception $e) {
			return new \WP_REST_Response(['error' => $e->getMessage()]);
		}
        $category = [0];
        if (!empty($params['categories'])) {
            $category = $params['categories'];
        }

        $post_type = 'post';
        if (!empty($params['post_type'])) {
            $category = $params['post_type'];
        }
        $attachmentId = null;
        if (isset($params['featured_image'])) {
            $attachmentId = $this->save_image_to_media_library($params['featured_image']);
        }

        $this->sanitize_params($params);
        $new_post = [
            'post_title' => $params['title'],
            'post_content' => $params['content'],
            'post_status' => \get_option(SIMPLONEAPP_PLUGIN_TEXTDOMAIN . '-post-status'),
            'post_date' => date('Y-m-d H:i:s'),
            'post_author' => \get_option(SIMPLONEAPP_PLUGIN_TEXTDOMAIN . '-user-id'),
            'post_type' => $post_type,
            'post_category' => $category,
        ];
        if (isset($params['slug'])) {
            $new_post['post_name'] = $params['slug'];
        }
        $post_id = wp_insert_post($new_post);

        if (!is_null($attachmentId) && $post_id && !is_wp_error($post_id)) {
            set_post_thumbnail($post_id, $attachmentId);
        }
		return new \WP_REST_Response(['ID' => $post_id]);
	}
    /**
     * @since 1.0.2
     * @param \WP_REST_Request $request Values.
     * @return \WP_REST_Response|\WP_REST_Request
     */
    public function verify_action( \WP_REST_Request $request ) {

        $return = [
            'message' => 'Plugin is installed',
            'url' => get_site_url(),
            'blog_name' => get_bloginfo('name')
        ];

        return new \WP_REST_Response(['success'=>true, 'data' => $return]);
    }

    /**
     * @since 1.0.6
     * @param \WP_REST_Request $request Values.
     * @return \WP_REST_Response|\WP_REST_Request
     */
    public function get_post_types(\WP_REST_Request $request)
    {
        $queryParams = $request->get_query_params();
        $public = false;
        if (isset($queryParams['onlyPublic'])) {
            $public = true;
        }
        $post_types = get_post_types(['public' => $public]);
        return new \WP_REST_Response(['success' => true, 'data' => array_keys($post_types)]);
    }

    /**
     * @since 1.0.5
     * @param \WP_REST_Request $request Values.
     * @return \WP_REST_Response|\WP_REST_Request
     */
    public function get_categories(\WP_REST_Request $request)
    {
        $args = ['taxonomy' => 'category', 'hide_empty' => 0];
        $queryParams = $request->get_query_params();
        if (isset($queryParams['taxonomy'])) {
            $args['taxonomy'] = $queryParams['taxonomy'];
        }
        $categories = get_categories($args);

        return new \WP_REST_Response(['success' => true, 'data' => $categories]);
    }
    private function save_image_to_media_library($image_url) {
        $image_data = file_get_contents($image_url);

        $filename = basename($image_url);

        $upload_dir = wp_upload_dir();
        $file_path = $upload_dir['path'] . '/' . $filename;

        file_put_contents($file_path, $image_data);
        $filetype = wp_check_filetype($filename, null);

        $attachment = array(
            'post_mime_type' => $filetype['type'],
            'post_title'     => sanitize_file_name($filename),
            'post_content'   => '',
            'post_status'    => 'inherit'
        );

        $attach_id = wp_insert_attachment($attachment, $file_path);
        require_once(ABSPATH . 'wp-admin/includes/image.php');
        $attach_data = wp_generate_attachment_metadata($attach_id, $file_path);
        wp_update_attachment_metadata($attach_id, $attach_data);

        return $attach_id;
    }
	private function validate_params(array $params): void
	{
		$allowedParams = ['title', 'content', 'categories', 'slug', 'featured_image', 'post_type'];
        $allowedArray = ['categories'];
		foreach ($params as $key => $param) {
			if (!in_array($key, $allowedParams)) {
				throw new \Exception('Parameter ' . $param . ' not allowed in request!');
			}
			if (!is_string($param) && !in_array($key, $allowedArray)) {
				throw new \Exception('Parameter ' . $param . ' should be a string!');
			}
		}
	}

	private function sanitize_params(array &$params): void
	{
		$params['title'] = wp_kses_post($params['title']);
		$params['content'] = wp_kses_post($params['content']);
		$params['slug'] = sanitize_title($params['slug']);
	}
}
