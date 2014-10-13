<?php
/**
 * BlogPostTags Controller
 * 
 * Just contains baked admin actions
 *
 * @author Neil Crookes <neil@crook.es>
 * @link http://www.neilcrookes.com http://neil.crook.es
 * @copyright (c) 2011 Neil Crookes
 * @license MIT License - http://www.opensource.org/licenses/mit-license.php
 */
class BlogPostTagsController extends AppController {

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
		$this->BlogPostTag->recursive = 0;
		$this->set('blogPostTags', $this->paginate());
			$this->set('page_title','<i class="fa fa-edit"></i> Blog');
    	$this->set('page_subtitle','tags');
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->BlogPostTag->id = $id;
		if (!$this->BlogPostTag->exists()) {
			throw new NotFoundException(__('Invalid blog post tag'));
		}
		$this->set('blogPostTag', $this->BlogPostTag->read(null, $id));
			$this->set('page_title','<i class="fa fa-edit"></i> Blog');
    	$this->set('page_subtitle','view tag');
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->BlogPostTag->create();
			if ($this->BlogPostTag->save($this->request->data)) {
				$this->Session->setFlash('The blog post tag has been saved','flash-success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The blog post tag could not be saved. Please, try again.','flash-error');
			}
		}
			$this->set('page_title','<i class="fa fa-edit"></i> Blog');
    	$this->set('page_subtitle','new tag');
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->BlogPostTag->id = $id;
		if (!$this->BlogPostTag->exists()) {
			throw new NotFoundException(__('Invalid blog post tag'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BlogPostTag->save($this->request->data)) {
				$this->Session->setFlash('The blog post tag has been saved','flash-success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The blog post tag could not be saved. Please, try again.','flash-error');
			}
		} else {
			$this->request->data = $this->BlogPostTag->read(null, $id);
		}
			$this->set('page_title','<i class="fa fa-edit"></i> Blog');
    	$this->set('page_subtitle','edit tag');
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
		$this->BlogPostTag->id = $id;
		if (!$this->BlogPostTag->exists()) {
			throw new NotFoundException(__('Invalid blog post tag'));
		}
		if ($this->BlogPostTag->delete()) {
			$this->Session->setFlash('Blog post tag deleted','flash-success');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash('Blog post tag was not deleted','flash-error');
		$this->redirect(array('action' => 'index'));
	}
}
