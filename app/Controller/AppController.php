<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	public $view   = 'Theme';
	public $theme = 'default';
	public $layout = 'default';

	public $helpers = array('Html', 'Form', 'Session');
	public $components = array(
		'Acl',
		'Auth' => array(
			'authorize' => array(
				'Actions' => array('actionPath' => 'controllers')
				),
			'authError' => 'Sorry you do not have sufficient authrisation to access this page. You have been logged out.' ,
			'unauthorizedRedirect' => '/auth_error'
			),
		'Session',
		'Paginator',
		'RequestHandler',
		'Mail'
	);

	public function beforeRender() {
		parent::beforeRender();
	}

	public function beforeFilter() {
	    parent::beforeFilter(); 

	    $this->Auth->autoRedirect = false;
		$this->Auth->allow(array('controller' => 'pages', 'action' => 'display'));
		$this->Auth->allow(array('controller' => 'pages', 'action' => 'view'));
	    $this->Auth->loginRedirect  = '/login_redirect';
	    $this->Auth->logoutRedirect = '/login';
		$this->Auth->loginAction = '/login';

		$this->loggedin = false;

		// If they user logged in
		if ($this->Auth->user()) {
	    	// Just for admins
			if($this->Auth->user()['Group']['id']==1) {
				$this->Auth->allow(); // Allow admins to access anything
			}
			// Create some global variables to be used throughout the app
			$this->group_id = $this->Auth->user()['Group']['id'];
			$this->loggedin = true;
	    	$this->set('authuser', $this->Auth->user());
		}

		// Change the theme if admin
		if ((isset($this->params['prefix']) && ($this->params['prefix'] == 'admin'))) {
			$this->theme = 'admin';
			$this->layout = 'admin';
		}

		// Place the global settings configuration into an variable object for global access across our controllers
		$this->settings = json_decode(json_encode(Configure::read('settings'))); //json converts array ot object

		// Set some global settings into every view file
		$settings_website_title = $this->settings->website->title;
		$settings_website_url = $this->settings->website->url;

		$settings_contact_address1 = $this->settings->contact->address1;
		$settings_contact_address2 = $this->settings->contact->address2;
		$settings_contact_address3 = $this->settings->contact->address3;
		$settings_contact_city = $this->settings->contact->city;
		$settings_contact_postcode = $this->settings->contact->postcode;
		$settings_contact_country = $this->settings->contact->country;
		$settings_contact_booking_email = $this->settings->contact->booking_email;
		$settings_contact_tel = $this->settings->contact->tel;

		$address = array($settings_contact_address1,
			$settings_contact_address2,
			$settings_contact_address3,
			$settings_contact_city,
			$settings_contact_postcode,
			$settings_contact_country);

		$settings_full_address = $this->formatAddress($address,FALSE);
		$settings_full_address_breaked = $this->formatAddress($address,TRUE);

		$website_title_for_layout = $this->settings->website->title;
		$loggedin = $this->loggedin;

		$this->set(compact(
			'settings_full_address',
			'settings_full_address_breaked',
			'settings_website_title',
			'settings_website_url',
			'website_title_for_layout',
			'loggedin'
			));

	}

	public function blackhole($type) {
		$this->Session->setFlash('Session expired, please try again.','flash-error');
		return $this->redirect($this->Auth->logout());
	}

	private function formatAddress($address,$breaked=FALSE) {
		$address_formatted = null;
		if($breaked) {
			$seperator = "<br />";
		} else {
			$seperator = ", ";
		}
		foreach($address as $key => $line) {
			$address_formatted .= $line.$seperator;
		}
		$address_formatted = rtrim($address_formatted, "<br />");
		return rtrim($address_formatted, ",");
	}
}
