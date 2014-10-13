<?php
/**
 * BlogPostCategories Controller
 *
 * Pretty much just baked admin actions except add/edit use generateTreeList()
 * for finding the parents so you see the hierarchy.
 *
 * @author Neil Crookes <neil@crook.es>
 * @link http://www.neilcrookes.com http://neil.crook.es
 * @copyright (c) 2011 Neil Crookes
 * @license MIT License - http://www.opensource.org/licenses/mit-license.php *
 */
class BlogPostCategoriesController extends AppController {


	public function beforeFilter() {
	    parent::beforeFilter(); // inherit beforeFilter() from AppController
	    $this->set('title_for_layout', 'Blog');
	}

/**
 * index method
 *
 * @return void
 */
	public function admin_index() {
		$this->BlogPostCategory->recursive = 0;
		$this->set('blogPostCategories', $this->paginate());

		$this->set('page_title','<i class="fa fa-edit"></i> Blog');
    	$this->set('page_subtitle','');
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->BlogPostCategory->id = $id;
		if (!$this->BlogPostCategory->exists()) {
			throw new NotFoundException(__('Invalid blog post category'));
		}
		$this->set('page_title','<i class="fa fa-edit"></i> Blog');
    	$this->set('page_subtitle','');

		$this->set('blogPostCategory', $this->BlogPostCategory->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->BlogPostCategory->create();
			if ($this->BlogPostCategory->save($this->request->data)) {
				$this->Session->setFlash('The blog post category has been saved','flash-success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The blog post category could not be saved. Please, try again.','flash-error');
			}
		}
		$parents = $this->BlogPostCategory->generateTreeList();
		$this->set(compact('parents'));
		$this->set('page_title','<i class="fa fa-edit"></i> Blog');
    	$this->set('page_subtitle','new category');
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->BlogPostCategory->id = $id;
		if (!$this->BlogPostCategory->exists()) {
			throw new NotFoundException(__('Invalid blog post category'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BlogPostCategory->save($this->request->data)) {
				$this->Session->setFlash('The blog post category has been saved','flash-success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The blog post category could not be saved. Please, try again.','flash-error');
			}
		} else {
			$this->request->data = $this->BlogPostCategory->read(null, $id);
		}
		$parents = $this->BlogPostCategory->generateTreeList();

		$this->set('page_title','<i class="fa fa-edit"></i> Blog');
    	$this->set('page_subtitle','edit category');

		$this->set(compact('parents'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->BlogPostCategory->id = $id;
		if (!$this->BlogPostCategory->exists()) {
			throw new NotFoundException(__('Invalid blog post category'));
		}
		if ($this->BlogPostCategory->delete()) {
			$this->Session->setFlash('Blog post category deleted','flash-success');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash('Blog post category was not deleted','flash-error');
		$this->redirect(array('action' => 'index'));
	}
}
