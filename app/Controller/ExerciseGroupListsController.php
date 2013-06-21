<?php
App::uses('AppController', 'Controller');
/**
 * GroupLists Controller
 *
 * @property ExerciseGroupList $ExerciseGroupList
 */
class ExerciseGroupListsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ExerciseGroupList->recursive = 0;
		$this->set('exerciseGroupLists', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ExerciseGroupList->exists($id)) {
			throw new NotFoundException(__('Invalid group list'));
		}
		$options = array('conditions' => array('ExerciseGroupList.' . $this->ExerciseGroupList->primaryKey => $id));
		$this->set('exerciseGroupList', $this->ExerciseGroupList->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ExerciseGroupList->create();
			if ($this->ExerciseGroupList->save($this->request->data)) {
				$this->Session->setFlash(__('The group list has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The group list could not be saved. Please, try again.'));
			}
		}
		$exercises = $this->ExerciseGroupList->Exercise->find('list');
		$iutGroups = $this->ExerciseGroupList->IutGroup->find('list');
		$this->set(compact('exercises', 'iutGroups'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ExerciseGroupList->exists($id)) {
			throw new NotFoundException(__('Invalid group list'));
		}
		if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data)) {
			if ($this->ExerciseGroupList->save($this->request->data)) {
				$this->Session->setFlash(__('The group list has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The group list could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ExerciseGroupList.' . $this->ExerciseGroupList->primaryKey => $id));
			$this->request->data = $this->ExerciseGroupList->find('first', $options);
		}
		$exercises = $this->ExerciseGroupList->Exercise->find('list');
		$iutGroups = $this->ExerciseGroupList->IutGroup->find('list');
		$this->set(compact('exercises', 'iutGroups'));
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
		$this->ExerciseGroupList->id = $id;
		if (!$this->ExerciseGroupList->exists()) {
			throw new NotFoundException(__('Invalid exercise group list'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ExerciseGroupList->delete()) {
			$this->Session->setFlash(__('Exercise Group list deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Exercise Group list was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
