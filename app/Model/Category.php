<?php
App::uses('AppModel', 'Model');

class Category extends AppModel {

	public $actsAs = array('Tree','Containable');
	public $displayField = 'name';
	var $name = 'Category'; 

	var $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Category must not be left empty'
				),
			),
		);

	public function beforeSave($options = array()) {
		if(isset($this->data['Category']['name']) && isset($this->data['Category']['label'])) :
			 $this->data['Category']['name'] = ucfirst($this->data['Category']['name']);
	         $this->data['Category']['label'] = ucfirst($this->data['Category']['label']);
        endif;
        return true;
	}

	public function afterSave($created,$options=array()) {
		$this->saveField('tree',$this->getTree($this->data['Category']['id']), array('callbacks' => false));
	    return true;
	}

	public function slugs() {
		$result = $this->find('list', array(
			'fields' => array('Category.slug')
			));
		return $result;
	}

	private function getTree($id) {
		$paths = $this->getPath($id);
		$slug = null;
		foreach ($paths as $path) {
			$slug .= $path['Category']['slug']."/"; 
		}
		$slug = substr($slug, 0, -1);
		return $slug;
	}

}
