<?php
/**
 * MigrationTask.php
 *
 * @package framework
 * @subpackage dev 
 */

/**
 * A migration task is a build task that is reversible.
 * 
 * <b>Creating Migration Tasks</b>
 * 
 * To create your own migration task all you need to do is define your own subclass of MigrationTask and define the
 * following functions
 * 
 * <i>mysite/code/MyMigrationTask.php</i>
 * 
 * <code>
 * class MyMigrationTask extends BuildTask {
 * 	
 * 	protected $title = "My Database Migrations"; // title of the script
 * 	protected $description = "Description"; // description of what it does
 * 	
 * 	public function run($request) {
 * 		if ($request->param('Direction') == 'down') {
 * 			$this->down();
 * 		} else {
 * 			$this->up();
 * 		}
 * 	}
 * 	
 * 	public function up() {
 * 		// do something when going from old -> new
 * 	}
 * 	
 * 	public function down() {
 * 		// do something when going from new -> old
 * 	}	
 * }
 * </code>
 * 
 * <b>Running Migration Tasks</b>
 * To run any tasks you can find them under the dev/ namespace. To run the above script you would need to run 
 * the following and note - Either the site has to be in [devmode](debugging) or you need to add ?isDev=1 to the URL
 * 
 * <code>
 * // url to visit if in dev mode.
 * http://www.yoursite.com/dev/tasks/MyMigrationTask
 * 
 * // url if you are in live mode but need to run this
 * http://www.yoursite.com/dev/tasks/MyMigrationTask?isDev=1
 * </code>
 * 
 * @package framework
 * @subpackage dev
 */
class MigrationTask extends BuildTask {
	/**
	 * Title of task
	 * 
	 * @var string
	 */
	protected $title = "Database Migrations";
	
	/**
	 * Description of task
	 * 
	 * @var string
	 */
	protected $description = "Provide atomic database changes (not implemented yet)";
	
	/**
	 * run
	 *
	 * @param SS_HTTPRequest $request
	 * @return void
	 */
	public function run($request) {
		if ($request->param('Direction') == 'down') {
			$this->down();
		} else {
			$this->up();
		}
	}
	
	/**
	 * Migrate data from upstream source to current database
	 *
	 * @return void
	 */
	public function up() {}
	
	/**
	 * Migrate data from current database to upstream source
	 *
	 * @return void
	 */
	public function down() {}
	
}

