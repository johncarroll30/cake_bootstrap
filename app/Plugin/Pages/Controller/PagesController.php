<?php
class PagesController extends PagesAppController {

/**
 * The name of this controller. Controller names are plural, named after the model they manipulate.
 *
 * @var string
 * @access public
 * @link http://book.cakephp.org/view/52/name
 */
	var $name = 'Pages';

/**
 * An array containing the class names of models this controller uses.
 *
 * Example: var $uses = array('Product', 'Post', 'Comment');
 *
 * Can be set to array() to use no models.  Can be set to false to
 * use no models and prevent the merging of $uses with AppController
 *
 * @var mixed A single name as a string or a list of names as an array.
 * @access protected
 * @link http://book.cakephp.org/view/53/components-helpers-and-uses
 */
	var $uses = array('Page');

/**
 * Holds pagination defaults for controller actions. The keys that can be included
 * in this array are: 'conditions', 'fields', 'order', 'limit', 'page', and 'recursive',
 * similar to the keys in the second parameter of Model::find().
 *
 * Pagination defaults can also be supplied in a model-by-model basis by using
 * the name of the model as a key for a pagination array:
 *
 * var $paginate = array(
 * 		'Post' => array(...),
 * 		'Comment' => array(...)
 * 	);
 *
 * @var array
 * @access public
 * @link http://book.cakephp.org/view/164/Pagination
 */
	var $paginate = array(
		'limit' => 10,
	);


/**
 * Array containing the names of components this controller uses. Component names
 * should not contain the "Component" portion of the classname.
 *
 * Example: var $components = array('Session', 'RequestHandler', 'Acl');
 *
 * @var array
 * @access public
 * @link http://book.cakephp.org/view/53/components-helpers-and-uses
 */
	var $components = array('Session', 'RequestHandler', 'Paginator');

/**
 * Called before the controller action.
 *
 * @access public
 * @link http://book.cakephp.org/view/60/Callbacks
 */
	function beforeRender() {
		$this->set('page_title','<i class="fa fa-file-text"></i> Content Pages');
	}
	function beforeFilter() {
		parent::beforeFilter();
		$this->helpers[] = 'Form';
		$this->helpers[] = 'Session';
		$this->helpers[] = 'Pages.TinyMce';

	}

	function _get_layouts() {
		App::uses('Folder', 'Utility');
		$Folder = new Folder();
		$app = App::themePath('default');
		$path = $app.'/Layouts/';

		if ($Folder->cd($path)) {
			$files = $Folder->find('.*\.ctp');
			foreach($files as &$file) {
				$file = basename($file, '.ctp');
			}
			if (!empty($files)) {
				$files = array_combine($files, $files);
				unset($files['default']);
			}
			return $files;
		}
		return array();
	}

	function admin_index() {
		$this->Page->recursive = -1;
    	$this->set('page_subtitle','');
		$this->set('pages', $this->Paginator->paginate('Page'));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Page->create();
			if ($this->Page->save($this->data)) {
				$this->Session->setFlash(array('class' => 'flash-success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Error saving page. Please try again.','flash-error');
			}
		}
    	$this->set('page_subtitle','Add new page');
		$this->set('layouts', $this->_get_layouts());
	}

	function admin_edit($id = null) {
		$this->_checkId($id);
		if (!empty($this->data)) {
			if ($this->Page->save($this->data)) {
				$this->Session->setFlash('Changes saved successfully.','flash-success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Changes cannot be saved.','flash-error');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Page->read(null, $id);
		}
    	$this->set('page_subtitle','Edit page');
		$this->set('layouts', $this->_get_layouts());
	}

	function admin_delete($id = null) {
		$this->_checkId($id);
		$this->Page->id = $id;
		if ($this->Page->delete($id)) {
			$this->Session->setFlash('Page successfully removed.','flash-success');
		} else {
			$this->Session->setFlash('Error deleting page.','flash-error');
		}
		$this->set('page_subtitle','Delete page');
		$this->redirect(array('action' => 'index'));
	}

	function admin_changestatus($id = null) {
		$this->_checkId($id);
		$this->Page->id = $id;
		$status = $this->Page->field('status');
	    $s['Page']['status'] = ($status == 0 ? 1 : 0);

		if ($this->Page->save($s)) {
			$this->Session->setFlash('Item status successfully changed.','flash-success');
		} else {
			$this->Session->setFlash('Status was not changed because of an error.','flash-error');
			var_dump($this->invalidFields());
		}
			    debug($this->validationErrors); 
		$this->set('page_subtitle','Change status');
		$this->redirect(array('action' => 'index'));
	}

	function view($level1 = null,$level2 = null,$level3 = null,$level4 = null) {
		if($level1) { $slug = $level1; }
		if($level2) { $slug .= "/" . $level2; }
		if($level3) { $slug .= "/" . $level3; }
		if($level4) { $slug .= "/" . $level4; }
		if (!$slug) {
			$this->cakeError('error404');
		}
		$page = $this->Page->find('first', array(
			'conditions' => array(
				'Page.slug' => $slug,
				'Page.status' => 1,
			),
			'contain' => false
		));

		if ($page === false) {
			$this->cakeError('error404');
		}

		if (!$this->RequestHandler->isAjax()) {
			$this->set('title_for_layout', $page['Page']['title']);
			if (isset($this->viewVars['seo'])) {
				$seo = $this->viewVars['seo'];
			} else {
				$seo = array();
			}

			if (!empty($page['Page']['meta_keyword'])) {
				$seo['keywords'] = $page['Page']['meta_keyword'];
			}

			if (!empty($page['Page']['meta_description'])) {
				$seo['description'] = $page['Page']['meta_description'];
			}

			if (!empty($page['Page']['layout'])) {
				$this->layout = $page['Page']['layout'];
			}

			$this->set(compact('seo'));
		}
		$this->set('page', $page);
	}

	function block() {
		$this->view($this->params['page']);
	}

}
?>