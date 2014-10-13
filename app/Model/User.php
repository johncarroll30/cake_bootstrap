<?php
App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');

/**
 * User Model
 *
 * @property Group $Group
 * @property Contact $Contact
 * @property Enquiry $Enquiry
 * @property Listing $Listing
 */
class User extends AppModel {

	//public $recursive = -1;
	public $actsAs = array(
		'Acl' => array('type' => 'requester'),
		'Containable'
		);

	public function parentNode() {
		if (!$this->id && empty($this->data)) {
			return null;
		}
		if (isset($this->data['User']['group_id'])) {
			$groupId = $this->data['User']['group_id'];
		} else {
			$groupId = $this->field('group_id');
		}
		if (!$groupId) {
			return null;
		} else {
			return array('Group' => array('id' => $groupId));
		}
	}

/**
 * Validation rules
 *
 * @var array
 */
public $validate = array(
	'group_id' => array(
		'numeric' => array(
			'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
	),
	'username' => array(
		'email' => array(
			'rule' => 'email',
			'required' => false,
			'allowEmpty' => false,
			'message' => 'Username should be a valid email'
			),
		'unique' => array(
			'rule' => 'isUnique',
			'message' => 'This username has already been taken'
			)
	),
	'passwd' => array(
		'rule' => array('minLength', '3'),
		'message' => 'Password should be at least 3 characters long',
		'required' => true,
		'allowEmpty' => false,
		'on' => 'create'
	),
	'passwd_old' => array(
		'rule' => array('checkPwd'),
		'message' => 'Incorrect current password',
		'required' => false,
		'allowEmpty' => false,
		'on' => 'update'
	),
	'passwd_confirm' => array(
		'rule' => array('matchPwd'),
		'message' => 'Repeat password does not match',
		'on'        => 'create'  
	),
	'name' => array(
		'name' => array('rule' => '/[A-Za-z ]+/', 'message' => 'Only letters and spaces please')
	),
	'address1' => array(
		'rule'    => 'notEmpty',
		'message' => 'This is a required field',
		'required' => false
	),
	'postcode' => array(
		'rule'    => 'notEmpty',
		'message' => 'This is a required field',
		'required' => false
	),
	'city' => array(
		'rule'    => 'notEmpty',
		'message' => 'This is a required field',
		'required' => false
	),
	'country' => array(
		'rule'    => 'notEmpty',
		'message' => 'This is a required field',
		'required' => false
	)
);

//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
public $belongsTo = array(

	'Group' => array(
		'className' => 'Group',
		'foreignKey' => 'group_id',
		'conditions' => '',
		'fields' => '',
		'order' => ''
		),
	);

/**
 * hasMany associations
 *
 * @var array
 */
public $hasMany = array(
	'Contact' => array(
		'className' => 'Contact',
		'foreignKey' => 'user_id',
		'dependent' => false,
		'conditions' => '',
		'fields' => '',
		'order' => '',
		'limit' => '',
		'offset' => '',
		'exclusive' => '',
		'finderQuery' => '',
		'counterQuery' => ''
		),
	'Enquiry' => array(
		'className' => 'Enquiry',
		'foreignKey' => 'user_id',
		'dependent' => false,
		'conditions' => '',
		'fields' => '',
		'order' => '',
		'limit' => '',
		'offset' => '',
		'exclusive' => '',
		'finderQuery' => '',
		'counterQuery' => ''
		),
	'Listing' => array(
		'className' => 'Listing',
		'foreignKey' => 'user_id',
		'dependent' => false,
		'conditions' => '',
		'fields' => '',
		'order' => '',
		'limit' => '',
		'offset' => '',
		'exclusive' => '',
		'finderQuery' => '',
		'counterQuery' => ''
		)
	);


public function beforeSave($options = array()) {

	// Only save the password if it's on the form
	if(!empty($this->data['User']['passwd'])) {
		$this->data['User']['password'] = AuthComponent::password(
			$this->data['User']['passwd']
			);
	}

	// Generate a confirmation code
	$this->data['User']['confirmation'] =  $this->confirmationCodeGenerate();

	// Save users IP address
	$this->data['User']['ip_address'] = $_SERVER['REMOTE_ADDR'];

	// Do some text transforming before saving
	$ucfirst = array('address1','address2','address3','city','postcode','country');
	$ucwords = array('name');
	$uppercase = array('postcode');
	$lowercase = array('username','email');

	foreach ($ucfirst  as $field) {
		if (!empty($this->data['User'][$field])) {
			$this->data['User'][$field] =  $this->ucFirst($this->data['User'][$field]);
		}
	}
	foreach ($uppercase as $field) {
		if (!empty($this->data['User'][$field])) {
			$this->data['User'][$field] =  $this->strToUpper($this->data['User'][$field]);
		}
	}
	foreach ($lowercase as $field) {
		if (!empty($this->data['User'][$field])) {
			$this->data['User'][$field] =  $this->strToLower($this->data['User'][$field]);
		}
	}

	return true;
}

/* Disable/Enable users */
public function disableEnable($user_id,$active) {
	$this->id = $user_id;
	if($this->saveField('active', $active)) {
		return TRUE;
	}
}

/* This method will be called to check password match */
public function matchPwd(){
	if ($this->data['User']['passwd']!=$this->data['User']['passwd_confirm'] ) {
		return false;
	}
	return true;
}

/* This method will be called for password updates */
public function checkPwd(){
	$this->id = AuthComponent::user('id');
	$password = $this->field('password');
	return(AuthComponent::password($this->data['User']['passwd_old']) == $password);
}

/* Some text transform functions */
private function ucFirst($string) {
	return ucfirst($string);
}

private function ucWords($string) {
	return strtolower($string);
}

private function strToUpper($string) {
	return strtoupper($string);
}

private function strToLower($string) {
	return strtolower($string);
}

/* Generate a confirmation code */
private function confirmationCodeCheck($code) {

	if($this->confirmation_valid($code)==true) {
		$this->User->recursion = -1;
		if($this->User->updateAll(array('User.status' => '"Active"'), array('User.confirmation' => $code))) {
			if($this->User->getAffectedRows()==1) {
				$this->Session->setFlash('Thank you for confirming your account. You can now login.','flash-success');
			} else {
				$this->Session->setFlash('Looks like your account is already confirmed or you have provided an invalid confirmation link','flash-error');
			}
		} else {
			$this->Session->setFlash('Invalid confirmation code','flash-error');
		}
	} else {
		$this->Session->setFlash('Invalid confirmation code','flash-error');
	}
}

/* Generate confirmation code */
private function confirmationCodeGenerate($length = 10) {
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, strlen($characters) - 1)];
	}

	return $randomString;
}

/* Check the confirmation code is valid */
private function confirmationCodeValid($code) {
	// If the code is letters and numbers and 10 digits long it's valid
	if (ctype_alnum($code) && (strlen($code)=='10')) {
		return true;
	} else {
		return false;
	}
}

/* Generate password */
public function generatePassword($length = 5) {
	$characters = '0123456789abcdefghijklmnopqrstuvwxyz';
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, strlen($characters) - 1)];
	}
	return $randomString;
}

/* Hash password */
public function hashPassword($password) {
	return AuthComponent::password($password);
}

/* Get ENUM statuses */
public function getENUM($field) {
		$statuses = $this->getColumnType($field);
		preg_match_all("/'(.*?)'/", $statuses, $enums);
		$array = array();
		foreach ($enums[0] as $enum) {
			$array[str_replace("'","",$enum)] = str_replace("'","",$enum);
		}
		$statuses = $array;
		return $statuses;
}

}