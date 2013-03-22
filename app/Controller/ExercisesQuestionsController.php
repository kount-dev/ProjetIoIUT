<?php
App::uses('AppController', 'Controller');
/**
 * ExercisesQuestions Controller
 *
 * @property ExercisesQuestion $ExercisesQuestion
 */
class ExercisesQuestionsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ExercisesQuestion->recursive = 0;
		$this->set('exercisesQuestions', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ExercisesQuestion->exists($id)) {
			throw new NotFoundException(__('Invalid exercises question'));
		}
		$options = array('conditions' => array('ExercisesQuestion.' . $this->ExercisesQuestion->primaryKey => $id));
		$this->set('exercisesQuestion', $this->ExercisesQuestion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ExercisesQuestion->create();
			if ($this->ExercisesQuestion->save($this->request->data)) {
				$this->Session->setFlash(__('The exercises question has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The exercises question could not be saved. Please, try again.'));
			}
		}
		$exercises = $this->ExercisesQuestion->Exercise->find('list');
		$questions = $this->ExercisesQuestion->Question->find('list');
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
		if (!$this->ExercisesQuestion->exists($id)) {
			throw new NotFoundException(__('Invalid exercises question'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ExercisesQuestion->save($this->request->data)) {
				$this->Session->setFlash(__('The exercises question has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The exercises question could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ExercisesQuestion.' . $this->ExercisesQuestion->primaryKey => $id));
			$this->request->data = $this->ExercisesQuestion->find('first', $options);
		}
		$exercises = $this->ExercisesQuestion->Exercise->find('list');
		$questions = $this->ExercisesQuestion->Question->find('list');
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
		$this->ExercisesQuestion->id = $id;
		if (!$this->ExercisesQuestion->exists()) {
			throw new NotFoundException(__('Invalid exercises question'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ExercisesQuestion->delete()) {
			$this->Session->setFlash(__('Exercises question deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Exercises question was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
