<?php
App::uses('AppController', 'Controller');
/**
 * ExercisesDisciplines Controller
 *
 * @property ExercisesDiscipline $ExercisesDiscipline
 */
class ExercisesDisciplinesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ExercisesDiscipline->recursive = 0;
		$this->set('exercisesDisciplines', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ExercisesDiscipline->exists($id)) {
			throw new NotFoundException(__('Invalid exercises discipline'));
		}
		$options = array('conditions' => array('ExercisesDiscipline.' . $this->ExercisesDiscipline->primaryKey => $id));
		$this->set('exercisesDiscipline', $this->ExercisesDiscipline->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ExercisesDiscipline->create();
			if ($this->ExercisesDiscipline->save($this->request->data)) {
				$this->Session->setFlash(__('The exercises discipline has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The exercises discipline could not be saved. Please, try again.'));
			}
		}
		$exercises = $this->ExercisesDiscipline->Exercise->find('list');
		$disciplines = $this->ExercisesDiscipline->Discipline->find('list');
		$this->set(compact('exercises', 'disciplines'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ExercisesDiscipline->exists($id)) {
			throw new NotFoundException(__('Invalid exercises discipline'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ExercisesDiscipline->save($this->request->data)) {
				$this->Session->setFlash(__('The exercises discipline has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The exercises discipline could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ExercisesDiscipline.' . $this->ExercisesDiscipline->primaryKey => $id));
			$this->request->data = $this->ExercisesDiscipline->find('first', $options);
		}
		$exercises = $this->ExercisesDiscipline->Exercise->find('list');
		$disciplines = $this->ExercisesDiscipline->Discipline->find('list');
		$this->set(compact('exercises', 'disciplines'));
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
		$this->ExercisesDiscipline->id = $id;
		if (!$this->ExercisesDiscipline->exists()) {
			throw new NotFoundException(__('Invalid exercises discipline'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ExercisesDiscipline->delete()) {
			$this->Session->setFlash(__('Exercises discipline deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Exercises discipline was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
