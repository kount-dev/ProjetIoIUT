<?php
App::uses('AppController', 'Controller');
/**
 * GroupLists Controller
 *
 * @property GroupList $GroupList
 */
class GroupListsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->GroupList->recursive = 0;
		$this->set('groupLists', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->GroupList->exists($id)) {
			throw new NotFoundException(__('Invalid group list'));
		}
		$options = array('conditions' => array('GroupList.' . $this->GroupList->primaryKey => $id));
		$this->set('groupList', $this->GroupList->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GroupList->create();
			if ($this->GroupList->save($this->request->data)) {
				$this->Session->setFlash(__('The group list has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The group list could not be saved. Please, try again.'));
			}
		}
		$users = $this->GroupList->User->find('list', array('fields' => array('id','username')));
		$iutGroups = $this->GroupList->IutGroup->find('list');
		$this->set(compact('users', 'iutGroups'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->GroupList->exists($id)) {
			throw new NotFoundException(__('Invalid group list'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->GroupList->save($this->request->data)) {
				$this->Session->setFlash(__('The group list has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The group list could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('GroupList.' . $this->GroupList->primaryKey => $id));
			$this->request->data = $this->GroupList->find('first', $options);
		}
		$users = $this->GroupList->User->find('list', array('fields' => array('id','username')));
		$iutGroups = $this->GroupList->IutGroup->find('list');
		$this->set(compact('users', 'iutGroups'));
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
		$this->GroupList->id = $id;
		if (!$this->GroupList->exists()) {
			throw new NotFoundException(__('Invalid group list'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->GroupList->delete()) {
			$this->Session->setFlash(__('Group list deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Group list was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
