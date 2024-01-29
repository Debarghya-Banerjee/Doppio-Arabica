<?php
/**
 * Theme bootstrap file.
 *
 * @package Doppio-Coffee
 */

namespace Doppio_Coffee;

use Doppio_Coffee\Traits\Singleton;
use Doppio_Coffee\Assets;

/**
 * Class Doppio_Coffee
 *
 * @since 1.0.0
 */
class Doppio_Coffee {

	use Singleton;

	/**
	 * Constructor.
	 */
	protected function __construct() {
		// Instantiate classes.
		Assets::get_instance();

		// Setup hooks.
		$this->setup_hooks();
	}

	/**
	 * Setup hooks.
	 *
	 * @since 1.0.0
	 */
	public function setup_hooks() {
		add_action( 'after_setup_theme', [ $this, 'doppio_coffee_support' ] );
	}

	/**
	 * Add required theme support.
	 *
	 * @since 1.0.0
	 */
	public function doppio_coffee_support() {
		// Add support for core block styles.
		add_theme_support( 'wp-block-styles' );
	}
}
