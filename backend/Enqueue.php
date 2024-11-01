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
 * This class contain the Enqueue stuff for the backend
 */
class Enqueue extends Base {

	/**
	 * Initialize the class.
	 *
	 * @return void|bool
	 */
	public function initialize() {
		if ( !parent::initialize() ) {
			return;
		}

	}

	/**
	 * Register and enqueue admin-specific style sheet.
	 *
	 * @since 1.0.0
	 * @return array
	 */
	public function enqueue_admin_styles() {
		$admin_page = \get_current_screen();
		$styles     = array();


		return $styles;
	}

	/**
	 * Register and enqueue admin-specific JavaScript.
	 *
	 * @since 1.0.0
	 * @return array
	 */
	public function enqueue_admin_scripts() {
		$admin_page = \get_current_screen();
		$scripts    = array();

		return $scripts;
	}

}
