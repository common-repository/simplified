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

/**
 * Get the settings of the plugin in a filterable way
 *
 * @since 1.0.0
 * @return array
 */
function simploneapp_get_settings() {
	return apply_filters( 'sp_get_settings', get_option( SIMPLONEAPP_PLUGIN_TEXTDOMAIN . '-settings' ) );
}
