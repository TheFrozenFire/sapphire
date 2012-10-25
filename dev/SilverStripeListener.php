<?php
/**
 * SilverStripeListener.php
 *
 * @package dev
 * @subpackage testing 
 */

/**
 * SilverStripeListener
 * 
 * Inject SilverStripe 'setUpOnce' and 'tearDownOnce' unittest extension methods into phpunit
 * This is already in later SilverStripe 2.4 versions, but having it here extends compatibility to older versions
 * 
 * @package dev
 * @subpackage testing
 */
class SilverStripeListener implements PHPUnit_Framework_TestListener {
	/**
	 * Checks if a given class is a valid SapphireTest
	 *
	 * @param string $name
	 * @return boolean
	 */
	protected function isValidClass($name) {
		return (class_exists($name) && is_subclass_of($name, 'SapphireTest'));
	}
	
	/**
	 * Start a test suite
	 *
	 * @param PHPUnit_Framework_TestSuite $suite
	 * @return void
	 */
	public function startTestSuite(PHPUnit_Framework_TestSuite $suite) {
		$name = $suite->getName();
		if(!$this->isValidClass($name)) return;

		$class = new $name();
		$class->setUpOnce();
	}
	
	/**
	 * End a test suite
	 *
	 * @param PHPUnit_Framework_TestSuite $suite
	 * @return void
	 */
	public function endTestSuite(PHPUnit_Framework_TestSuite $suite) {
		$name = $suite->getName();
		if(!$this->isValidClass($name)) return;

		$class = new $name();
		$class->tearDownOnce();
	}
	
	/**
	 * Start a test
	 *
	 * @param PHPUnit_Framework_Test $test
	 * @return void
	 */
	public function startTest(PHPUnit_Framework_Test $test) {
	}
	
	/**
	 * End a test
	 *
	 * @param PHPUnit_Framework_Test $test
	 * @param unknown $time
	 * @return void
	 */
	public function endTest(PHPUnit_Framework_Test $test, $time) {
	}
	
	/**
	 * Log an error
	 *
	 * @param PHPUnit_Framework_Test $test
	 * @param Exception $e
	 * @param unknown $time
	 * @return void
	 */
	public function addError(PHPUnit_Framework_Test $test, Exception $e, $time) {
	}
 	
 	/**
	 * Log a failure
	 *
	 * @param PHPUnit_Framework_Test $test
	 * @param PHPUnit_Framework_AssertionFailedError $e
	 * @param unknown $time
	 * @return void
	 */
	public function addFailure(PHPUnit_Framework_Test $test, PHPUnit_Framework_AssertionFailedError $e, $time) {
	}
	
	/**
	 * Log an incomplete test
	 *
	 * @param PHPUnit_Framework_Test $test
	 * @param Exception $e
	 * @param unknown $time
	 * @return void
	 */
	public function addIncompleteTest(PHPUnit_Framework_Test $test, Exception $e, $time) {
	}
	
	/**
	 * Log a skipped test
	 *
	 * @param PHPUnit_Framework_Test $test
	 * @param Exception $e
	 * @param unknown $time
	 * @return void
	 */
	public function addSkippedTest(PHPUnit_Framework_Test $test, Exception $e, $time) {
	}
} 
