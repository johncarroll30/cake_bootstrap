<?php
App::uses('AppController', 'Controller');
/**
 * Groups Controller
 *
 * @property Group $Group
 * @property PaginatorComponent $Paginator
 */
class GroupsController extends AppController {

	public function beforeFilter() {
		parent::beforeFilter();

    // For CakePHP 2.1 and up
		$this->Auth->allow();

     // Page title
		$this->set('p_title', 'Users &amp; Groups');
		
	}

/**
 * Components
 *
 * @var array
 */
public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
public function admin_index() {
	$this->Group->recursive = 0;
	$this->set('groups', $this->Paginator->paginate());
	$this->set('page_title','<i class="fa fa-user"></i> User Accounts');
    $this->set('page_subtitle','list groups');
}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
public function admin_view($id = null) {
	if (!$this->Group->exists($id)) {
		throw new NotFoundException(__('Invalid group'));
	}
	$options = array('conditions' => array('Group.' . $this->Group->primaryKey => $id));
	$this->set('group', $this->Group->find('first', $options));
	$this->set('page_title','<i class="fa fa-user"></i> User Accounts');
    $this->set('page_subtitle','view group');
}

/**
 * add method
 *
 * @return void
 */
public function admin_add() {
	if ($this->request->is('post')) {
		$this->Group->create();
		if ($this->Group->save($this->request->data)) {
			$this->Session->setFlash('The group has been saved.','flash-success');
			return $this->redirect(array('action' => 'index'));
		} else {
			$this->Session->setFlash('The group could not be saved. Please, try again.','flash-error');
		}
	}
	$this->set('page_title','<i class="fa fa-user"></i> User Accounts');
    $this->set('page_subtitle','new group');
}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
public function admin_edit($id = null) {
	if (!$this->Group->exists($id)) {
		throw new NotFoundException(__('Invalid group'));
	}
	if ($this->request->is(array('post', 'put'))) {
		if ($this->Group->save($this->request->data)) {
			$this->Session->setFlash('The group has been saved.','flash-success');
			return $this->redirect(array('action' => 'index'));
		} else {
			$this->Session->setFlash('The group could not be saved. Please, try again.','flash-error');
		}
	} else {
		$options = array('conditions' => array('Group.' . $this->Group->primaryKey => $id));
		$this->request->data = $this->Group->find('first', $options);
	}
	$this->set('page_title','<i class="fa fa-user"></i> User Accounts');
    $this->set('page_subtitle','edit group');
}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
public function admin_delete($id = null) {
	$this->Group->id = $id;
	if (!$this->Group->exists()) {
		throw new NotFoundException(__('Invalid group'));
	}
	$this->request->onlyAllow('post', 'delete');
	if ($this->Group->delete()) {
		$this->Session->setFlash('The group has been deleted.','flash-success');
	} else {
		$this->Session->setFlash('The group could not be deleted.','flash-error');
	}
	return $this->redirect(array('action' => 'index'));
}
}
