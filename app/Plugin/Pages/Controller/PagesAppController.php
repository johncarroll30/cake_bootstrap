<?php
class PagesAppController extends AppController
{

	function _checkId($id = null) {
		if (empty($this->data)) {
			if (!$id) {
				$this->Session->setFlash(__d('pages', 'Invalid link requested data.', true), 'default', array('class' => 'error'));
				$this->redirect(array('action' => 'index'));
			}
			$this->Page->id = $id;
			if (!$this->Page->exists()) {
				$this->Session->setFlash(__d('pages', 'The information requested does not exist.', true), 'default', array('class' => 'error'));
				$this->redirect(array('action' => 'index'));
			}
		} else {
			if ($id != $this->data['Page']['id']) {
				$this->Session->setFlash(__d('pages', 'Error data.', true), 'default', array('class' => 'error'));
				$this->redirect(array('action' => 'index'));
			}
		}
	}

}
?>