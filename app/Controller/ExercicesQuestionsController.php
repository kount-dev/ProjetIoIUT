<?php
App::uses('AppController', 'Controller');
/**
 * ExercicesQuestions Controller
 *
 * @property ExercicesQuestion $ExercicesQuestion
 */
class ExercicesQuestionsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ExercicesQuestion->recursive = 0;
		$this->set('exercicesQuestions', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ExercicesQuestion->exists($id)) {
			throw new NotFoundException(__('Invalid exercices question'));
		}
		$options = array('conditions' => array('ExercicesQuestion.' . $this->ExercicesQuestion->primaryKey => $id));
		$this->set('exercicesQuestion', $this->ExercicesQuestion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ExercicesQuestion->create();
			if ($this->ExercicesQuestion->save($this->request->data)) {
				$this->Session->setFlash(__('The exercices question has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The exercices question could not be saved. Please, try again.'));
			}
		}
		$exercises = $this->ExercicesQuestion->Exercise->find('list');
		$questions = $this->ExercicesQuestion->Question->find('list');
		$this->set(compact('exercises', 'questions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ExercicesQuestion->exists($id)) {
			throw new NotFoundException(__('Invalid exercices question'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ExercicesQuestion->save($this->request->data)) {
				$this->Session->setFlash(__('The exercices question has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The exercices question could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ExercicesQuestion.' . $this->ExercicesQuestion->primaryKey => $id));
			$this->request->data = $this->ExercicesQuestion->find('first', $options);
		}
		$exercises = $this->ExercicesQuestion->Exercise->find('list');
		$questions = $this->ExercicesQuestion->Question->find('list');
		$this->set(compact('exercises', 'questions'));
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
		$this->ExercicesQuestion->id = $id;
		if (!$this->ExercicesQuestion->exists()) {
			throw new NotFoundException(__('Invalid exercices question'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ExercicesQuestion->delete()) {
			$this->Session->setFlash(__('Exercices question deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Exercices question was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
