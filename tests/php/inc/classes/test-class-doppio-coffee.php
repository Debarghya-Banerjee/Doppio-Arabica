<?php
/**
 * Test if class Doppio_Coffee exists.
 *
 * @package Doppio-Coffee
 */

use Doppio_Coffee\Tests\TestCase;
use Doppio_Coffee\Doppio_Coffee;

/**
 * Class Test_Doppio_Coffee
 */
class Test_Doppio_Coffee extends TestCase {

	/**
	 * Test if class Doppio_Coffee exists.
	 *
	 * @since 1.0.0
	 */
	public function test_class_exists() {
		$this->assertTrue( class_exists( 'Doppio_Coffee\Doppio_Coffee' ) );
	}

	/**
	 * Test if class Doppio_Coffee is a singleton.
	 *
	 * @since 1.0.0
	 */
	public function test_class_is_singleton() {
		$this->assertTrue( Doppio_Coffee::get_instance() instanceof Doppio_Coffee );
	}

	/**
	 * Test if class Doppio_Coffee has a method 'setup_hooks'.
	 *
	 * @since 1.0.0
	 */
	public function test_class_has_method_setup_hooks() {
		$this->assertTrue( method_exists( 'Doppio_Coffee\Doppio_Coffee', 'setup_hooks' ) );
	}

	/**
	 * Test if class Doppio_Coffee has a method 'doppio_coffee_support'.
	 *
	 * @since 1.0.0
	 */
	public function test_class_has_method_doppio_coffee_support() {
		$this->assertTrue( method_exists( 'Doppio_Coffee\Doppio_Coffee', 'doppio_coffee_support' ) );
	}
}
