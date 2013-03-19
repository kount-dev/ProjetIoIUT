<?php
App::uses('AppController', 'Controller');
/**
 * Resultats Controller
 *
 * @property Resultat $Resultat
 */
class ResultatsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Resultat->recursive = 0;
		$this->set('resultats', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Resultat->exists($id)) {
			throw new NotFoundException(__('Invalid resultat'));
		}
		$options = array('conditions' => array('Resultat.' . $this->Resultat->primaryKey => $id));
		$this->set('resultat', $this->Resultat->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Resultat->create();
			if ($this->Resultat->save($this->request->data)) {
				$this->Session->setFlash(__('The resultat has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The resultat could not be saved. Please, try again.'));
			}
		}
		$users = $this->Resultat->User->find('list');
		$exercises = $this->Resultat->Exercise->find('list');
		$this->set(compact('users', 'exercises'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Resultat->exists($id)) {
			throw new NotFoundException(__('Invalid resultat'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Resultat->save($this->request->data)) {
				$this->Session->setFlash(__('The resultat has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The resultat could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Resultat.' . $this->Resultat->primaryKey => $id));
			$this->request->data = $this->Resultat->find('first', $options);
		}
		$users = $this->Resultat->User->find('list');
		$exercises = $this->Resultat->Exercise->find('list');
		$this->set(compact('users', 'exercises'));
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
		$this->Resultat->id = $id;
		if (!$this->Resultat->exists()) {
			throw new NotFoundException(__('Invalid resultat'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Resultat->delete()) {
			$this->Session->setFlash(__('Resultat deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Resultat was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
