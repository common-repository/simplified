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

namespace Simplified_Plugin\Backend;

use Simplified_Plugin\Engine\Base;

/**
 * Provide Import and Export of the settings of the plugin
 */
class Settings extends Base {

	/**
	 * Initialize the class.
	 *
	 * @return void|bool
	 */
	public function initialize() {
		if ( !parent::initialize() ) {
			return;
		}

		// Add the save settings method
		\add_action( 'admin_init', array( $this, 'settings_save' ) );
	}


	/**
	 * Process a settings import from a json file
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function settings_save() {
		if (
			empty( $_POST[ 'sp_action' ] ) || //phpcs:ignore WordPress.Security.NonceVerification
			'simplified_settings_save' !== \sanitize_text_field( \wp_unslash( $_POST[ 'sp_action' ] ) ) //phpcs:ignore WordPress.Security.NonceVerification
		) {
			return;
		}
		if ($error = $this->validate_settings()) {
			new \WP_Error(
				'simplifiedplugin_save_settings_failed',
				\__( 'Failed to save the settings: ' . $error, 'simplifiedplugin' )
			);
		}
		if ( !\wp_verify_nonce( \sanitize_text_field( \wp_unslash( $_POST[ 'simplified_settings_save_nonce' ] ) ), 'simplified_settings_save_nonce' ) ) { //phpcs:ignore WordPress.Security.ValidatedSanitizedInput
			return;
		}

		if ( !\current_user_can( 'manage_options' ) ) {
			return;
		}

		if(!empty($_POST[ 'sp_api_token' ])){
			\update_option( SIMPLONEAPP_PLUGIN_TEXTDOMAIN . '-api-token', \sanitize_text_field( \wp_unslash( $_POST[ 'sp_api_token' ] ) ) );
			\update_option( SIMPLONEAPP_PLUGIN_TEXTDOMAIN . '-user-id', \sanitize_text_field($_POST[ 'sp_user_id' ]) );
			\update_option( SIMPLONEAPP_PLUGIN_TEXTDOMAIN . '-post-status', \sanitize_text_field($_POST[ 'sp_post_status' ]) );

			\wp_safe_redirect( \admin_url( 'options-general.php?page=' . SIMPLONEAPP_PLUGIN_TEXTDOMAIN ) );
			exit;
		}

		new \WP_Error(
				'simplifiedplugin_save_settings_failed',
				\__( 'Failed to save the settings.', 'simplifiedplugin' )
			);

	}

	private function validate_settings(): ?string
	{
		$allowedFields = [
			'sp_api_token',
			'sp_action',
			'sp_user_id',
			'sp_post_status',
			'simplified_settings_save_nonce',
			'_wp_http_referer',
			'submit'
		];

		foreach ($_POST as $key => $value) {
			if (!in_array($key, $allowedFields)) {
				return 'Field \'' . $key . '\' not allowed in request!';
			}

			if (!$this->validate_field($key, $value)) {
				return 'Field \'' . $key . '\' has invalid type!';
			}
		}

		return null;
	}

	private function validate_field(string $name, $value): bool
	{
		switch ($name) {
			case 'sp_api_token':
			case 'sp_action':
			case 'sp_post_status':
				return is_string($value);
			case 'sp_user_id':
				return is_int($value);
		}
		//field does not require validation
		return true;
	}
}
