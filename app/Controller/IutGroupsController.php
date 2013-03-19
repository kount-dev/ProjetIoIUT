<?php
App::uses('AppController', 'Controller');
/**
 * IutGroups Controller
 *
 * @property IutGroup $IutGroup
 */
class IutGroupsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->IutGroup->recursive = 0;
		$this->set('iutGroups', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->IutGroup->exists($id)) {
			throw new NotFoundException(__('Invalid iut group'));
		}
		$options = array('conditions' => array('IutGroup.' . $this->IutGroup->primaryKey => $id));
		$this->set('iutGroup', $this->IutGroup->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->IutGroup->create();
			if ($this->IutGroup->save($this->request->data)) {
				$this->Session->setFlash(__('The iut group has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The iut group could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->IutGroup->exists($id)) {
			throw new NotFoundException(__('Invalid iut group'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->IutGroup->save($this->request->data)) {
				$this->Session->setFlash(__('The iut group has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The iut group could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('IutGroup.' . $this->IutGroup->primaryKey => $id));
			$this->request->data = $this->IutGroup->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->IutGroup->id = $id;
		if (!$this->IutGroup->exists()) {
			throw new NotFoundException(__('Invalid iut group'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->IutGroup->delete()) {
			$this->Session->setFlash(__('Iut group deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Iut group was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
