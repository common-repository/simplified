<?php

/**
 * @package   Simplified_Plugin
 * @author    Jacek Dobrowolski <jack@simplified.co>
 * @copyright 2022 Simplified
 * @license   GPL 2.0+
 * @link      https://simplified.com
 *
 * Plugin Name:     Simplified
 * Plugin URI:      https://simplified.com
 * Description:     Direct publishing AI blog content from Simplified.com to your Wordpress blog
 * Version:         1.0.6
 * Author:          Simplified.com
 * Text Domain:     simplifiedplugin
 * License:         GPL 2.0+
 * License URI:     http://www.gnu.org/licenses/gpl-3.0.txt
 * Domain Path:     /languages
 * Requires PHP:    7.4
 * WordPress-Plugin-Boilerplate-Powered: v3.3.0
 */

// If this file is called directly, abort.
if ( !defined( 'ABSPATH' ) ) {
	die( 'We\'re sorry, but you can not directly access this file.' );
}

define( 'SIMPLONEAPP_PLUGIN_VERSION', '1.0.0' );
define( 'SIMPLONEAPP_PLUGIN_TEXTDOMAIN', 'simplifiedplugin' );
define( 'SIMPLONEAPP_PLUGIN_NAME', 'Simplified' );
define( 'SIMPLONEAPP_PLUGIN_PLUGIN_ROOT', plugin_dir_path( __FILE__ ) );
define( 'SIMPLONEAPP_PLUGIN_PLUGIN_ABSOLUTE', __FILE__ );
define( 'SIMPLONEAPP_PLUGIN_MIN_PHP_VERSION', '7.4' );
define( 'SIMPLONEAPP_PLUGIN_WP_VERSION', '5.3' );

add_action(
	'init',
	static function () {
		load_plugin_textdomain( SIMPLONEAPP_PLUGIN_TEXTDOMAIN, false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
	}
	);

if ( version_compare( PHP_VERSION, SIMPLONEAPP_PLUGIN_MIN_PHP_VERSION, '<=' ) ) {
	add_action(
		'admin_init',
		static function() {
			deactivate_plugins( plugin_basename( __FILE__ ) );
		}
	);
	add_action(
		'admin_notices',
		static function() {
			echo wp_kses_post(
			sprintf(
				'<div class="notice notice-error"><p>%s</p></div>',
				__( '"Simplified Plugin" requires PHP 5.6 or newer.', 'simplifiedplugin' )
			)
			);
		}
	);

	// Return early to prevent loading the plugin.
	return;
}

$simplifiedplugin_libraries = require SIMPLONEAPP_PLUGIN_PLUGIN_ROOT . 'vendor/autoload.php'; //phpcs:ignore

require_once SIMPLONEAPP_PLUGIN_PLUGIN_ROOT . 'functions/functions.php';
require_once SIMPLONEAPP_PLUGIN_PLUGIN_ROOT . 'functions/debug.php';

$requirements = new \Micropackage\Requirements\Requirements(
	'Simplified Plugin',
	array(
		'php'            => SIMPLONEAPP_PLUGIN_MIN_PHP_VERSION,
		'php_extensions' => array( 'mbstring' ),
		'wp'             => SIMPLONEAPP_PLUGIN_WP_VERSION,
	)
);

if ( ! $requirements->satisfied() ) {
	$requirements->print_notice();

	return;
}

if ( ! wp_installing() ) {
	register_activation_hook( SIMPLONEAPP_PLUGIN_TEXTDOMAIN . '/' . SIMPLONEAPP_PLUGIN_TEXTDOMAIN . '.php', array( new \Simplified_Plugin\Backend\ActDeact, 'activate' ) );
	register_deactivation_hook( SIMPLONEAPP_PLUGIN_TEXTDOMAIN . '/' . SIMPLONEAPP_PLUGIN_TEXTDOMAIN . '.php', array( new \Simplified_Plugin\Backend\ActDeact, 'deactivate' ) );
	add_action(
		'plugins_loaded',
		static function () use ( $simplifiedplugin_libraries ) {
			new \Simplified_Plugin\Engine\Initialize( $simplifiedplugin_libraries );
		}
	);
}
