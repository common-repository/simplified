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

namespace Simplified_Plugin\Engine;

/**
 * Base skeleton of the plugin
 */
class Base {

	/**
	 * @var array The settings of the plugin.
	 */
	public $settings = array();

	/**
	 * Initialize the class and get the plugin settings
	 *
	 * @return bool
	 */
	public function initialize() {
		$this->settings = \simploneapp_get_settings();

		return true;
	}

}
