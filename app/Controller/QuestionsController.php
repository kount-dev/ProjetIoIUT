<?php
App::uses('AppController', 'Controller');
/**
 * Questions Controller
 *
 * @property Question $Question
 */
class QuestionsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Question->recursive = 0;
		$this->set('questions', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Question->exists($id)) {
			throw new NotFoundException(__('Invalid question'));
		}
		$options = array('conditions' => array('Question.' . $this->Question->primaryKey => $id));
		$this->set('question', $this->Question->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Question->create();
			if ($this->Question->save($this->request->data)) {
				$this->Session->setFlash(__('The question has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The question could not be saved. Please, try again.'));
			}
		}
		$users = $this->Question->User->find('list');
		$questionTypes = $this->Question->QuestionType->find('list');
		$disciplines = $this->Question->Discipline->find('list');
		$this->set(compact('users', 'questionTypes', 'disciplines'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Question->exists($id)) {
			throw new NotFoundException(__('Invalid question'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Question->save($this->request->data)) {
				$this->Session->setFlash(__('The question has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The question could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Question.' . $this->Question->primaryKey => $id));
			$this->request->data = $this->Question->find('first', $options);
		}
		$users = $this->Question->User->find('list');
		$questionTypes = $this->Question->QuestionType->find('list');
		$disciplines = $this->Question->Discipline->find('list');
		$this->set(compact('users', 'questionTypes', 'disciplines'));
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
		$this->Question->id = $id;
		if (!$this->Question->exists()) {
			throw new NotFoundException(__('Invalid question'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Question->delete()) {
			$this->Session->setFlash(__('Question deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Question was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 *@desc Cette fonction permet de generer une question, elle doit retourner l'HTML a afficher
 *pour la generation
 *@return le contenu HTML dans un string
 */
    public function generation(){
    	if ($this->request->is('post')){
			$question_types_name_list = $this->Question->QuestionType->find('list', array('fields' => array('id', 'name')));
			$question_types_controller_list = $this->Question->QuestionType->find('list', array('fields' => array('id', 'controller')));
			$question_types_list = array();
			foreach ($question_types_name_list as $key => $val) {
    			$question_types_list[$key] = array('value' => $key,'name' =>$question_types_name_list[$key], 'questiontype' => $question_types_controller_list[$key]);
			}

			$author = $this->Auth->user('id');
			$disciplines = $this->Question->Discipline->find('list');
			$num_question = (int)$this->request->data['n'];
			$this->loadModel('Exercise');
			$exerciseId = $this->Exercise->field('id', array(), 'created DESC') + 1;
			$this->set(compact('disciplines','question_types_list', 'author','num_question', 'exerciseId'));

	    	$this->layout = false;
			$this->render();
    	}
    }

    public function saveQuestion(){
    	$this->Session->setFlash(__('We pass Question.saveQuestion'));
    	$this->Question->create();
		$this->Question->saveMany($this->request->data->Question);
	}
}

