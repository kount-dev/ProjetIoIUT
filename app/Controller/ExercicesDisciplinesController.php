<?php
App::uses('AppController', 'Controller');
/**
 * ExercicesDisciplines Controller
 *
 * @property ExercicesDiscipline $ExercicesDiscipline
 */
class ExercicesDisciplinesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ExercicesDiscipline->recursive = 0;
		$this->set('exercicesDisciplines', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ExercicesDiscipline->exists($id)) {
			throw new NotFoundException(__('Invalid exercices discipline'));
		}
		$options = array('conditions' => array('ExercicesDiscipline.' . $this->ExercicesDiscipline->primaryKey => $id));
		$this->set('exercicesDiscipline', $this->ExercicesDiscipline->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ExercicesDiscipline->create();
			if ($this->ExercicesDiscipline->save($this->request->data)) {
				$this->Session->setFlash(__('The exercices discipline has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The exercices discipline could not be saved. Please, try again.'));
			}
		}
		$exercises = $this->ExercicesDiscipline->Exercise->find('list');
		$disciplines = $this->ExercicesDiscipline->Discipline->find('list');
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
		if (!$this->ExercicesDiscipline->exists($id)) {
			throw new NotFoundException(__('Invalid exercices discipline'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ExercicesDiscipline->save($this->request->data)) {
				$this->Session->setFlash(__('The exercices discipline has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The exercices discipline could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ExercicesDiscipline.' . $this->ExercicesDiscipline->primaryKey => $id));
			$this->request->data = $this->ExercicesDiscipline->find('first', $options);
		}
		$exercises = $this->ExercicesDiscipline->Exercise->find('list');
		$disciplines = $this->ExercicesDiscipline->Discipline->find('list');
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
		$this->ExercicesDiscipline->id = $id;
		if (!$this->ExercicesDiscipline->exists()) {
			throw new NotFoundException(__('Invalid exercices discipline'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ExercicesDiscipline->delete()) {
			$this->Session->setFlash(__('Exercices discipline deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Exercices discipline was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
