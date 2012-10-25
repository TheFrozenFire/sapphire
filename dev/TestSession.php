<?php
/**
 * TestSession.php
 *
 * @package framework
 * @subpackage testing
 */

/**
 * Represents a test usage session of a web-app
 * It will maintain session-state from request to request
 * 
 * @package framework
 * @subpackage testing
 */
class TestSession {
	/**
	 * @ignore
	 */
	private $session;
	/**
	 * @ignore
	 */
	private $lastResponse;
	
	/**
	 * Necessary to use the mock session
	 * created in {@link session} in the normal controller stack,
	 * e.g. to overwrite Member::currentUser() with custom login data.
	 * @var Controller
	 */
	protected $controller;
	
	/**
	 * @var string $lastUrl Fake HTTP Referer Tracking, set in {@link get()} and {@link post()}.
	 */
	private $lastUrl;
	
	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {
		$this->session = new Session(array());
		$this->controller = new Controller();
		$this->controller->setSession($this->session);
		$this->controller->pushCurrent();
	}
	
	/**
	 * __destruct
	 *
	 * @return void
	 */
	public function __destruct() {
		// Shift off anything else that's on the stack.  This can happen if something throws
		// an exception that causes a premature TestSession::__destruct() call
		while(Controller::has_curr() && Controller::curr() !== $this->controller) Controller::curr()->popCurrent();

		if(Controller::has_curr()) $this->controller->popCurrent();
	}
	
	/**
	 * Submit a get request
	 * @uses Director::test()
	 * @param string $url
	 * @param unknown $session
	 * @param unknown $headers
	 * @param unknown $cookies
	 * @return string
	 */
	public function get($url, $session = null, $headers = null, $cookies = null) {
		$headers = (array) $headers;
		if($this->lastUrl && !isset($headers['Referer'])) $headers['Referer'] = $this->lastUrl;
		$this->lastResponse 
			= Director::test($url, null, $session ? $session : $this->session, null, null, $headers, $cookies);
		$this->lastUrl = $url;
		if(!$this->lastResponse) user_error("Director::test($url) returned null", E_USER_WARNING);
		return $this->lastResponse;
	}

	/**
	 * Submit a post request
	 * @uses Director::test()
	 * @param string $url
	 * @param unknown $data
	 * @param unknown $headers
	 * @param unknown $session
	 * @param unknown $body
	 * @param unknown $cookies
	 * @return string
	 */
	public function post($url, $data, $headers = null, $session = null, $body = null, $cookies = null) {
		$headers = (array) $headers;
		if($this->lastUrl && !isset($headers['Referer'])) $headers['Referer'] = $this->lastUrl;
		$this->lastResponse
			= Director::test($url, $data, $session ? $session : $this->session, null, $body, $headers, $cookies);
		$this->lastUrl = $url;
		if(!$this->lastResponse) user_error("Director::test($url) returned null", E_USER_WARNING);
		return $this->lastResponse;
	}
	
	/**
	 * Submit the form with the given HTML ID, filling it out with the given data.
	 * Acts on the most recent response.
	 * 
	 * Any data parameters have to be present in the form, with exact form field name
	 * and values, otherwise they are removed from the submission.
	 * 
	 * Caution: Parameter names have to be formatted
	 * as they are in the form submission, not as they are interpreted by PHP.
	 * Wrong: array('mycheckboxvalues' => array(1 => 'one', 2 => 'two'))
	 * Right: array('mycheckboxvalues[1]' => 'one', 'mycheckboxvalues[2]' => 'two')
	 * 
	 * @see http://www.simpletest.org/en/form_testing_documentation.html
	 * 
	 * @param String $formID HTML 'id' attribute of a form (loaded through a previous response)
	 * @param String $button HTML 'name' attribute of the button (NOT the 'id' attribute)
	 * @param Array $data Map of GET/POST data. 
	 * @return SS_HTTPResponse
	 */
	public function submitForm($formID, $button = null, $data = array()) {
		$page = $this->lastPage();
		if($page) {
			$form = $page->getFormById($formID);
			if (!$form) {
				user_error("TestSession::submitForm failed to find the form {$formID}");
			}

			foreach($data as $k => $v) {
				$form->setField(new SimpleByName($k), $v);
			}

			if($button) $submission = $form->submitButton(new SimpleByName($button));
			else $submission = $form->submit();

			$url = Director::makeRelative($form->getAction()->asString());

			$postVars = array();
			parse_str($submission->_encode(), $postVars);
			return $this->post($url, $postVars);
			
		} else {
			user_error("TestSession::submitForm called when there is no form loaded."
				. " Visit the page with the form first", E_USER_WARNING);
		}
	}
	
	/**
	 * If the last request was a 3xx response, then follow the redirection
	 */
	public function followRedirection() {
		if($this->lastResponse->getHeader('Location')) {
			$url = Director::makeRelative($this->lastResponse->getHeader('Location'));
			$url = strtok($url, '#');
			return $this->get($url);
		}
	}
	
	/**
	 * Returns true if the last response was a 3xx redirection
	 */
	public function wasRedirected() {
		$code = $this->lastResponse->getStatusCode();
		return $code >= 300 && $code < 400;
	}
	
	/**
	 * Get the most recent response, as an SS_HTTPResponse object
	 */
	public function lastResponse() {
		return $this->lastResponse;
	}
	
	/**
	 * Get the most recent response's content
	 */
	public function lastContent() {
		if(is_string($this->lastResponse)) return $this->lastResponse;
		else return $this->lastResponse->getBody();
	}
	
	/**
	 * Returns a CSSContentParser for the last block of content
	 *
	 * @return CSSContentParser
	 */
	public function cssParser() {
		return new CSSContentParser($this->lastContent());
	}

	
	/**
	 * Get the last response as a SimplePage object
	 * 
	 * @return SimplePage
	 */
	public function lastPage() {
		require_once("thirdparty/simpletest/http.php");
		require_once("thirdparty/simpletest/page.php");
		require_once("thirdparty/simpletest/form.php");

		$builder = new SimplePageBuilder();
		if($this->lastResponse) {
			$page = &$builder->parse(new TestSession_STResponseWrapper($this->lastResponse));
			$builder->free();
			unset($builder);
		
			return $page;
		}
	}
	
	/**
	 * Get the current session, as a Session object
	 * 
	 * @return Session
	 */
	public function session() {
		return $this->session;
	}
}

/**
 * Wrapper around SS_HTTPResponse to make it look like a SimpleHTTPResposne
 * 
 * @package framework
 * @subpackage testing
 */
class TestSession_STResponseWrapper {
	/**
	 * @ignore
	 */
	private $response;
	
	/**
	 * __construct
	 *
	 * @param SS_HTTPResponse $response
	 * @return void
	 */
	public function __construct(SS_HTTPResponse $response) {
		$this->response = $response;
	}
	
	/**
	 * Returns the response body
	 *
	 * @return string
	 */
	public function getContent() {
		return $this->response->getBody();
	}
	
	/**
	 * Returns the response error, if present
	 *
	 * @return string
	 */
	public function getError() {
		return "";
	}
	
	/**
	 * getSent
	 *
	 * @return null
	 */
	public function getSent() {
		return null;
	}
	
	/**
	 * getHeaders
	 *
	 * @return string
	 */
	public function getHeaders() {
		return "";
	}
	
	/**
	 * Returns the request HTTP method
	 *
	 * @return string
	 */
	public function getMethod() {
		return "GET";
	}
	
	/**
	 * Returns the request URL
	 *
	 * @return string
	 */
	public function getUrl() {
		return "";
	}
	
	/**
	 * Returns the request data
	 *
	 * @return null
	 */
	public function getRequestData() {
		return null;
	}
}
