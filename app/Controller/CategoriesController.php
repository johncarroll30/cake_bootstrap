<?php
App::uses('AppController', 'Controller');

class CategoriesController extends AppController {


	public $components = array('Paginator', 'Session');
	public $helpers = array('Tree','Slug','Paginator','Form');
	public $uses = array('Category','Listing');

	private $prefix = "sp-";

	public function beforeFilter() {
		parent::beforeFilter(); 

	}

	public function admin_index() {

		$selectCategories = $this->Category->generateTreeList(
			null,
			null,
			null,
			' - '
			);
		$categories = $this->Category->find('threaded', 
			array( 'order' => array('Category.name'))); 

		$this->set(compact('categories','selectCategories'));
	}


	public function admin_movedown($id = null, $delta = null) {
		$this->Category->id = $id;
		if (!$this->Category->exists()) {
			throw new NotFoundException(__('Invalid Pillar'));
		}

		if ($delta > 0) {
			$this->Category->moveDown($this->Category->id, abs($delta));
		} else {
			$this->Session->setFlash(
				'Please provide the number of positions the field should be' .
				'moved down.','flash-error'
				);
		}

		return $this->redirect(array('action' => 'index'));
	}

	public function admin_moveup($id = null, $delta = null) {
		$this->Category->id = $id;
		if (!$this->Category->exists()) {
			throw new NotFoundException(__('Invalid category'));
		}

		if ($delta > 0) {
			$this->Category->moveUp($this->Category->id, abs($delta));
		} else {
			$this->Session->setFlash(
				'Please provide a number of positions the Pillar should' .
				'be moved up.','flash-error'
				);
		}

		return $this->redirect(array('action' => 'index'));
	}

	public function admin_delete_category($id = null) {

		if ($exists) {
			$this->Session->setFlash('Pillar cannot be deleted due to having Service Providers under this Pillar', 'flash-error');
		} else {

			$this->Category->id = $id;
			if (!$this->Category->exists()) {
				throw new NotFoundException(__('Invalid category'));
			}
			if($this->Category->delete()) {
				$this->Session->setFlash('Pillar deleted', 'flash-success');
			};

		}

		return $this->redirect(array('action' => 'index'));
	}

	public function admin_create_category($id = null) {

			$category_id = $this->request->data['category']; // category id
			$category_name = $this->request->data['Category']['category_name']; // category name
			$category_label = $this->request->data['Category']['category_label']; // category label

			if($category_name) {
				if($this->Category->save(array(
					'parent_id'=>$category_id,
					'name'=>$category_name,
					'label'=>$category_label,
					'slug'=>Inflector::slug(strtolower($category_name), $replacement = '-'))
					)){
					$this->Session->setFlash('Category saved', 'flash-success');
				} else {
					$this->Session->setFlash('Could not save Pillar', 'flash-error');
				}

			} else {
				$this->Session->setFlash('No Pillar entered', 'flash-error');
			}

			return $this->redirect(array('action' => 'index'));
	}

	public function admin_edit_category($id = null) {

		$this->Category->id = $id; // id of category
		if (!$this->Category->exists()) {
			throw new NotFoundException(__('Invalid category'));
		} else {
			$category = $this->Category->findAllById($id);
		}

		if($this->request->is('post')) {
				if($this->Category->save(
					array(
						'id' => $id,
						'name' => $this->request->data['Category']['name'],
						'label' => $this->request->data['Category']['label'],
						'slug' => Inflector::slug(strtolower($this->request->data['Category']['name']), $replacement = '-')
						)
					)) {
				$this->Session->setFlash('Category updated', 'flash-success');
			}

			return $this->redirect(array('action' => 'index'));
		}

		// Build tree slug
		$this->Category->getPath($id);
		$category_name = $category[0]['Category']['name'];
		$category_label = $category[0]['Category']['label'];

		$this->set(compact('category_name','category_label'));

	}

}