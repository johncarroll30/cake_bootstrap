<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 */
class UsersController extends AppController {

	/**
	 * Components
	 *
	 * @var array
	 */
	public $components =  array(
		'Security' => array ('csrfUseOnce' => false)
		);

	public function beforeRender() {
		parent::beforeRender();
	}

	public function beforeFilter() {
		parent::beforeFilter(); 

	    // Set Blackhole security
		$this->Security->blackHoleCallback = 'blackhole';
		$this->Security->csrfExpires = '+1 hour';

	    // Let's ignore blackhole for registration etc, not ideal but if we can find a fix for fakepassword request we will enable it back
		if (isset($this->Security) && $this->action == 'register') {
			$this->Security->csrfCheck = false;
			$this->Security->validatePost = false;
		}

		if (isset($this->Security) && $this->action == 'admin_add') {
			$this->Security->csrfCheck = false;
			$this->Security->validatePost = false;
		}

		if (isset($this->Security) && $this->action == 'admin_edit') {
			$this->Security->csrfCheck = false;
			$this->Security->validatePost = false;
		}

	    // Force HTTPS
	    //$this->Security->requireSecure();

		$this->Auth->autoRedirect = false;

	    // Allow everyone to 
		$this->Auth->allow('register','confirmation','login','logout','forgotten','login_redirect','auth_error');

	    // Set authUser
		$this->set('authUser', $this->Auth->user());

	}

	public function login() {
		
		// If they are already logged in redirect them
		if($this->loggedin) {
			return $this->redirect($this->Auth->redirectUrl());
		} else {
			if ($this->request->is('post')) {
				if ($this->Auth->login()) {
					return $this->redirect($this->Auth->redirectUrl());
				}
				$this->Session->setFlash('Your username or password was incorrect','flash-error');
			}
		}
		$this->set('title_for_layout', 'Login');
	}

	public function logout() {
		$this->Session->destroy();
		if($this->loggedin) {
			$this->Session->setFlash('You have successully logged out','flash-success');
			return $this->redirect($this->Auth->logout());
		} else {
			return $this->redirect($this->Auth->logout());
		}

	}

	public function auth_error() {
		$this->Session->destroy();
		if($this->loggedin) {
			$this->Session->setFlash('Sorry, you are unauthorised to access this page','flash-error');
			return $this->redirect($this->Auth->logout());
		} else {
			return $this->redirect($this->Auth->logout());
		}

	}

	public function login_redirect() {
		 // Redirects depending on User type
		$group_id = $this->Auth->user()['Group']['id'];

	    // If user logged in
		if ($group_id>0) {
	    	  // If user is an admin then redirect them to the CP Dashboard
			if($group_id == 1 || $group_id == 2) { 
				$this->redirect('/admin/dashboard');
			} else if ($group_id == 3) {
				$this->redirect('/owners');
			} else {
				$this->redirect('/users');
			}
		}
	}

	public function register($type='user') {

		// If they are already logged in redirect them
		if($this->loggedin) {
			$this->redirect('/login');
		}

		$registered = FALSE;

		// If a registration attempt is made
		if ($this->request->is('post')) {

			if (!empty($this->data)) {

				if ($this->User->save($this->data)) {

					$register_success = TRUE;

					// Send confirmation url
					$confirmation_code = $this->User->read('confirmation')['User']['confirmation']; // returns the confirmation code generated in the model
					$confirmation_url = $this->settings->website->url . $this->settings->url->confirmation . $confirmation_code;

					// Email content variables
					$viewVars = array(
						'name' => $this->data['User']['name'],
						'confirmation_url' => $confirmation_url
						);

					// Recipients
					$to = array($this->data['User']['username']);

					$this->Mail->Send(
						$this->settings->email->noreply, // from john@mail.com
						$to, // recipients as an array
						'Confirmation email', // subject
						'registration/success', // template html element
						$viewVars // for the content
						);

					$registered = TRUE;

				}
			} else {
					//debug($this->User->validationErrors);
				$this->Session->setFlash('Sorry, we could not register your account, please check the form.','flash-error');
			}
		}

		$this->set(compact('registered','type'));
	} 



	public function forgotten() {

		if ($this->request->is('post')) {

			$reset = FALSE;
			$email = $this->data['User']['username'];

			$isValid = Validation::email($email); // Returns true or false

			if($isValid) {

				$user = $this->User->findByUsername($email);

				if($user) {

					// First check they haven't done a request in the last 30 minutes
					$pwd = $user['User']['password_request'];

					$continue = TRUE;

					if(!empty($pwd)) {
						if (time() < strtotime($pwd)) {
							$continue = TRUE;
						} 
					}

					if($continue==TRUE) {

						$new_password = $this->User->generatePassword();
						$new_hash_password = $this->User->hashPassword($new_password);

						$data = array('id' => $user['User']['id'], 'password' => $new_hash_password, 'password_request' => date('Y-m-d H:i:s', strtotime("+1 hour +30 minutes")));

						if($this->User->save($data)) {
							
							// Email content variables
							$viewVars = array(
								'name' => $user['User']['name'],
								'password' => $new_password,
								'login_url' => $this->settings->website->url
								);

							// Recipients
							$to = array($this->data['User']['username']);

							$this->Mail->Send(
								$this->settings->email->noreply, // from john@mail.com
								$to, // recipients as an array
								'Password reset', // subject
								'registration/password_reset', // template html element
								$viewVars // for the content
								);

							$message = 'We have sent you your new password to <b>'.$this->data['User']['username'].'</b>, please <b>wait at up to 30 minutes</b> for this to arrive in your inbox';
							$this->Session->setFlash($message,'flash-success');

							$reset = TRUE;
						}
					} else {
						$message = 'You have made a password reset request in the last 30 minutes. Please wait at least another 30 minutes before your next request.';
						$this->Session->setFlash($message,'flash-error');
					}

				} else {
					$this->Session->setFlash('We could find no account registered under this email address','flash-error');
				}
			} else {
				$this->Session->setFlash('We could find no account registered under this email address','flash-error');
			}
		}
		$this->set(compact('reset'));
		$this->set('title_for_layout', 'Login details request');
	}

	public function admin_dashboard() {
		$this->set('title_for_layout', 'Dashboard');
	}

	public function admin_index() {

		$this->Paginator->settings = array(
			//'conditions' => array('group_id'=>$this->group_ids),
			'limit' => 30
		);
		$this->User->recursive = 1;
		App::uses('Sanitize', 'Utility');
		// If there's a search request
		if ($this->request->is('post')) {
			if (!empty($this->data)) {
				$this->Paginator->settings = array(
					'conditions' => array('
						(User.name LIKE \'%' . addslashes(Sanitize::paranoid($this->data['User']['search'])) . '%\' OR
							User.username LIKE \'%' . addslashes(Sanitize::paranoid($this->data['User']['search'])) . '%\')
					')
				);
			}
		}		

		$this->set('title_for_layout', 'Users and Groups');
		$this->set('users', $this->Paginator->paginate());
	}


	public function admin_view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		
		$options = array(
			'contain' => array('Group'),
			'conditions' => array('User.' . $this->User->primaryKey => $id)
			);

		$this->set('title_for_layout', 'Users and Groups');
		$this->set('user', $this->User->find('first', $options));
	}

	public function admin_add() {

		$this->Security->csrfCheck = false;
		$this->Security->validatePost = false;

		if ($this->request->is('post')) {
			if (!empty($this->data)) {
				//$this->beforeSave();
				$this->User->create();
				if ($this->User->save($this->data)) {
					$this->Session->setFlash('The user has been saved.','flash-success');

					$this->redirect(array('action'=>'index'));
				} else {

					$this->Session->setFlash('The user could not be saved. Please, try again.','flash-error');
				}
			}
		}
		$this->Group = ClassRegistry::init('Group');

		//$options = array('conditions' => array('Group.id' => $this->group_ids));
		//$groups = $this->Group->find('list', $options);

		$groups = $this->Group->find('list');

		$statuses = $this->User->getENUM('status');

		$this->set('title_for_layout', 'Users and Groups');

		$this->set(compact('groups','statuses'));
	}

	public function admin_edit($id = null) {

		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}

		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));

		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('The user has been updated!','flash-success');
				$this->redirect(array('controller'=>'users','action'=>'index'));
			} else {
				$this->Session->setFlash('The user could not be saved. Please, try again.','flash-error');
			}
		} else {
			$this->request->data = $this->User->find('first', $options);
		}

		$statuses = $this->User->getENUM('status');

		$user = $this->User->find('first', $options);

		$this->Group = ClassRegistry::init('Group');

		//$options = array('conditions' => array('Group.id' => $this->group_ids));
		//$groups = $this->Group->find('list', $options);
		$groups = $this->Group->find('list');

		$this->set('title_for_layout', 'Users and Groups');

		$this->set(compact('groups','statuses','user'));
	}

	public function admin_delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash('The user has been deleted.','flash-success');
		} else {
			$this->Session->setFlash('The user could not be deleted. Please, try again.','flash-error');
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function admin_change_status($id = null, $active = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->disableEnable($id, $active)) {
			$this->Session->setFlash('The users active status has been updated','flash-success');
		} else {
			$this->Session->setFlash('The users active could not be updated. Please, try again.','flash-error');
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function admin_profile() {

		$this->User->id = $this->Auth->user('id');
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user post'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('Your account details have been updated. Please remember if you have updated your email login, the next time you login your email address will be your new email address','flash-success');
				$this->redirect('/admin/users/profile');
			} else {
				$this->Session->setFlash('Your account details could not be updated.','flash-error');
			}
		} else {
			$this->request->data = $this->User->read(null, $this->User->id);
		}

		$data = $this->request->data;
		$title_for_layout = "My Profile";
    	$this->set(compact('title_for_layout', 'data'));

	}


} // end class