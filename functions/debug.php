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

$simploneapp_debug = new WPBP_Debug( __( 'Simplified Plugin', 'simplifiedplugin' ) );

/**
 * Log text inside the debugging plugins.
 *
 * @param string $text The text.
 * @return void
 */
function simploneapp_log(string $text ) {
	global $simploneapp_debug;
	$simploneapp_debug->log( $text );
}
