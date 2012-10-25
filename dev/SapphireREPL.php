<?php
/**
 * SapphireREPL.php
 *
 * @package framework
 * @subpackage dev
 */

/**
 * Read-Eval-Print-Loop controller for CLI
 * 
 * @package framework
 * @subpackage dev
 */
class SapphireREPL extends Controller {
	
	/**
	 * Allowed controller actions
	 * 
	 * @static
	 * @var array
	 */
	static $allowed_actions = array(
		'index'
	);
	
	/**
	 * error_handler
	 *
	 * @param int $errno
	 * @param string $errstr
	 * @param string $errfile
	 * @param string $errline
	 * @param unknown $errctx
	 * @return void
	 */
	public function error_handler( $errno, $errstr, $errfile, $errline, $errctx ) {
		// Ignore unless important error
		if ( ($errno & ~( 2048 | 8192 | 16384 )) == 0 ) return ;
		// Otherwise throw exception to handle in REPL loop
		throw new Exception(sprintf("%s:%d\r\n%s", $errfile, $errline, $errstr));
	}
	
	/**
	 * index
	 *
	 * @return void
	 */
	public function index() {
		if(!Director::is_cli()) {
			return "The SilverStripe Interactive Command-line doesn't work in a web browser."
				. " Use 'sake interactive' from the command-line to run.";
		}


		/* Try using PHP_Shell if it exists */
		@include 'php-shell-cmd.php' ;

		/* Fall back to our simpler interface */
		if( empty( $__shell ) ) {
			set_error_handler(array($this, 'error_handler'));

			echo "SilverStripe Interactive Command-line (REPL interface). Type help for hints.\n\n";
			while(true) {
				echo SS_Cli::text("?> ", "cyan");
				echo SS_Cli::start_colour("yellow");
				$command = trim(fgets(STDIN, 4096));
				echo SS_Cli::end_colour();

				if ( $command == 'help' || $command == '?' ) {
					print "help or ? to exit\n" ;
					print "quit or \q to exit\n" ;
					print "install PHP_Shell for a more advanced interface with"
						. " auto-completion and readline support\n\n" ;
					continue ;
				}

				if ( $command == 'quit' || $command == '\q' ) break ;

				// Simple command processing
				if(substr($command,-1) == ';') $command = substr($command,0,-1);
				$is_print = preg_match('/^\s*print/i', $command);
				$is_return = preg_match('/^\s*return/i', $command);
				if(!$is_print && !$is_return) $command = "return ($command)";
				$command .= ";";

				try {
					$result = eval($command);
					if(!$is_print) print_r($result);
					echo "\n";
				}
				catch( Exception $__repl_exception ) {
					echo SS_Cli::start_colour("red");
					printf( '%s (code: %d) got thrown'.PHP_EOL, 
						get_class($__repl_exception), 
						$__repl_exception->getCode() );
					print $__repl_exception;
					echo "\n";
				}
			}
		}
	}
}

