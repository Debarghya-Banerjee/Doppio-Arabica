<?php
/**
 * Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Doppio-Coffee
 */

if ( ! defined( 'DOPPIO_COFFEE_VERSION' ) ) :
	define( 'DOPPIO_COFFEE_VERSION', wp_get_theme()->get( 'Version' ) );
endif;

if ( ! defined( 'DOPPIO_COFFEE_TEMP_DIR' ) ) :
	define( 'DOPPIO_COFFEE_TEMP_DIR', untrailingslashit( get_template_directory() ) );
endif;

if ( ! defined( 'DOPPIO_COFFEE_BUILD_URI' ) ) :
	define( 'DOPPIO_COFFEE_BUILD_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build' );
endif;

if ( ! defined( 'DOPPIO_COFFEE_BUILD_DIR' ) ) :
	define( 'DOPPIO_COFFEE_BUILD_DIR', untrailingslashit( get_template_directory() ) . '/assets/build' );
endif;

require_once DOPPIO_COFFEE_TEMP_DIR . '/vendor/autoload.php';

/**
 * Theme bootstrap instance.
 *
 * @since 1.0.0
 *
 * @return object Theme bootstrap instance.
 */
function doppio_coffee_instance() {
	return Doppio_Coffee\Doppio_Coffee::get_instance();
}

// Instantiate theme.
doppio_coffee_instance();
