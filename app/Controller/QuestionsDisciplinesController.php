<?php
App::uses('AppController', 'Controller');
/**
 * QuestionsDisciplines Controller
 *
 * @property QuestionsDiscipline $QuestionsDiscipline
 */
class QuestionsDisciplinesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->QuestionsDiscipline->recursive = 0;
		$this->set('questionsDisciplines', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->QuestionsDiscipline->exists($id)) {
			throw new NotFoundException(__('Invalid questions discipline'));
		}
		$options = array('conditions' => array('QuestionsDiscipline.' . $this->QuestionsDiscipline->primaryKey => $id));
		$this->set('questionsDiscipline', $this->QuestionsDiscipline->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->QuestionsDiscipline->create();
			if ($this->QuestionsDiscipline->save($this->request->data)) {
				$this->Session->setFlash(__('The questions discipline has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The questions discipline could not be saved. Please, try again.'));
			}
		}
		$questions = $this->QuestionsDiscipline->Question->find('list');
		$disciplines = $this->QuestionsDiscipline->Discipline->find('list');
		$this->set(compact('questions', 'disciplines'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->QuestionsDiscipline->exists($id)) {
			throw new NotFoundException(__('Invalid questions discipline'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->QuestionsDiscipline->save($this->request->data)) {
				$this->Session->setFlash(__('The questions discipline has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The questions discipline could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('QuestionsDiscipline.' . $this->QuestionsDiscipline->primaryKey => $id));
			$this->request->data = $this->QuestionsDiscipline->find('first', $options);
		}
		$questions = $this->QuestionsDiscipline->Question->find('list');
		$disciplines = $this->QuestionsDiscipline->Discipline->find('list');
		$this->set(compact('questions', 'disciplines'));
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
		$this->QuestionsDiscipline->id = $id;
		if (!$this->QuestionsDiscipline->exists()) {
			throw new NotFoundException(__('Invalid questions discipline'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->QuestionsDiscipline->delete()) {
			$this->Session->setFlash(__('Questions discipline deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Questions discipline was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
