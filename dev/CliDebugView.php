<?php
/**
 * CliDebugView.php
 *
 * @package framework
 * @subpackage dev
 */

/**
 * A basic HTML wrapper for stylish rendering of a developement info view.
 * Used to output error messages, and test results.
 * 
 * @package framework
 * @subpackage dev
 * 
 * @todo Perhaps DebugView should be an interface / ABC, implemented by HTMLDebugView and CliDebugView?
 */
class CliDebugView extends DebugView {

	/**
	 * Render HTML header for development views
	 * 
	 * @param SS_HTTPRequest $httpRequest
	 * @return void
	 */
	public function writeHeader($httpRequest = null) {
	}
	
	/**
	 * Render HTML footer for development views
	 * 
	 * @return void
	 */
	public function writeFooter() {
	}	

	/**
	 * Write information about the error to the screen
	 * 
	 * @param SS_HTTPRequest $httpRequest
	 * @param int $errno
	 * @param string $errstr
	 * @param string $errfile
	 * @param string $errline
	 * @param unknown $errcontext
	 * @return void
	 */
	public function writeError($httpRequest, $errno, $errstr, $errfile, $errline, $errcontext) {
		$errorType = self::$error_types[$errno];
		echo SS_Cli::text("ERROR [" . $errorType['title'] . "]: $errstr\nIN $httpRequest\n", "red", null, true);
		echo SS_Cli::text("Line $errline in $errfile\n\n", "red");
	}

	/**
	 * Write a fragment of a source file
	 * 
	 * @param array $lines An array of file lines; the keys should be the original line numbers
	 * @param string $errline
	 */
	public function writeSourceFragment($lines, $errline) {
		echo "Source\n======\n";
		foreach($lines as $offset => $line) {
			echo ($offset == $errline) ? "* " : "  ";
			echo str_pad("$offset:",5);
			echo wordwrap($line, 100, "\n       ");
		}
		echo "\n";
	}
	
	/**
	 * Write a backtrace
	 * 
	 * @param string $trace
	 * @return void
	 */
	public function writeTrace($trace = null) {
		echo "Trace\n=====\n";
		echo SS_Backtrace::get_rendered_backtrace($trace ? $trace : debug_backtrace(), true);
	}

	/**
	 * Render the information header for the view
	 * 
	 * @param string $title
	 * @param string $subtitle
	 * @param string $description
	 * @return void
	 */
	public function writeInfo($title, $subtitle, $description=false) {
		echo wordwrap(strtoupper($title),100) . "\n";
		echo wordwrap($subtitle,100) . "\n";
		echo str_repeat('-',min(100,max(strlen($title),strlen($subtitle)))) . "\n";
		echo wordwrap($description,100) . "\n\n";
	}
	
}

