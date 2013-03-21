<?php
App::uses('AppController', 'Controller');
/**
 * QuestionTypes Controller
 *
 * @property QuestionType $QuestionType
 */
class QuestionTypesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->QuestionType->recursive = 0;
		$this->set('questionTypes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->QuestionType->exists($id)) {
			throw new NotFoundException(__('Invalid question type'));
		}
		$options = array('conditions' => array('QuestionType.' . $this->QuestionType->primaryKey => $id));
		$this->set('questionType', $this->QuestionType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->QuestionType->create();
			if ($this->QuestionType->save($this->request->data)) {
				$this->Session->setFlash(__('The question type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The question type could not be saved. Please, try again.'));
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
		if (!$this->QuestionType->exists($id)) {
			throw new NotFoundException(__('Invalid question type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->QuestionType->save($this->request->data)) {
				$this->Session->setFlash(__('The question type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The question type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('QuestionType.' . $this->QuestionType->primaryKey => $id));
			$this->request->data = $this->QuestionType->find('first', $options);
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
		$this->QuestionType->id = $id;
		if (!$this->QuestionType->exists()) {
			throw new NotFoundException(__('Invalid question type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->QuestionType->delete()) {
			$this->Session->setFlash(__('Question type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Question type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
