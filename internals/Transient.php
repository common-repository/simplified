<?php

/**
 * Simplified Plugin
 *
 * @package   Simplified_Plugin
 * @author    Jacek Dobrowolski <jack@simplified.co>
 * @copyright 2022 Simplified
 * @license   GPL 2.0+
 * @link      https://simplified.com
 */

namespace Simplified_Plugin\Internals;

use Simplified_Plugin\Engine\Base;
use \stdClass; // phpcs:ignore

/**
 * Transient used by the plugin
 */
class Transient extends Base {

	/**
	 * Initialize the class.
	 *
	 * @return void|bool
	 */
	public function initialize() {
		parent::initialize();
	}

}
