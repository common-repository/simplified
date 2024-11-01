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

namespace Simplified_Plugin\Ajax;

use Simplified_Plugin\Engine\Base;

/**
 * AJAX in the public
 */
class Ajax extends Base {

	/**
	 * Initialize the class.
	 *
	 * @return void|bool
	 */
	public function initialize() {
		if ( !\apply_filters( 'simplifiedplugin_sp_ajax_initialize', true ) ) {
			return;
		}

		// For not logged user
		\add_action( 'wp_ajax_nopriv_validate_plugin', array( $this, 'validate_plugin' ) );
	}

	/**
	 * The method to run on ajax
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function validate_plugin() {

		$token = get_option(SIMPLONEAPP_PLUGIN_TEXTDOMAIN . '-api-token');
		if ($token == $_GET['token']) {
			$return = [
				'message' => 'Plugin is installed',
				'url' => get_site_url(),
				'blog_name' => get_bloginfo('name')
			];

			\wp_send_json_success($return);
		} else {
			$return = [
				'message' => 'Plugin is not configured',
			];

			\wp_send_json_error($return);
		}

	}

}
