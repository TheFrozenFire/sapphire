<?php
/**
 * SapphireInfo.php
 *
 * @package framework
 * @subpackage control
 */

/**
 * Returns information about the current site instance.
 * @package framework
 * @subpackage control
 */
class SapphireInfo extends Controller {
	/**
	 * Allowed controller actions
	 * 
	 * @static
	 * @var array
	 */
	static $allowed_actions = array(
		'baseurl',
		'version',
		'environmenttype',
	);
	
	/**
	 * init
	 *
	 * @return void
	 */
	public function init() {
		parent::init();
		if(!Director::is_cli() && !Permission::check('ADMIN')) return Security::permissionFailure();
	}
	
	/**
	 * Version
	 *
	 * @return string
	 */
	public function Version() {
		$sapphireVersion = file_get_contents(FRAMEWORK_PATH . '/silverstripe_version');
		if(!$sapphireVersion) $sapphireVersion = _t('LeftAndMain.VersionUnknown', 'unknown');
		return $sapphireVersion;
	}
	
	/**
	 * EnvironmentType
	 *
	 * @return string
	 */
	public function EnvironmentType() {
		if(Director::isLive()) return "live";
		else if(Director::isTest()) return "test";
		else return "dev";
	}
	
	/**
	 * BaseURL
	 *
	 * @return string
	 */
	public function BaseURL() {
		return Director::absoluteBaseURL();
	}
}
