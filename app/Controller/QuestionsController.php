<?php
App::uses('AppController', 'Controller');
App::uses('QcusController','Controller');
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
		$disciplines = $this->Question->Discipline->find('list');
		$this->set(compact('disciplines'));
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
		$disciplines = $this->Question->Discipline->find('list');
		$this->set(compact('disciplines'));
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

    	if ($this->request->is('post')) {
    		//$qcus = new QcusController();
    		//$qcus->generation($this->request);
    		$this->Session->setFlash(__('We are here Questions'));
            //$this->redirect(array('action' => 'generation'));
            $this->layout = false;
        	$this->render(false);
			// $this->Question->create();
			// if ($this->Question->save($this->request->data)) {
		 	// $this->Session->setFlash(__('The question has been saved'));
		 	// $this->redirect(array('action' => 'index'));
			// } else {
			// 	$this->Session->setFlash(__('The question could not be saved. Please, try again.'));
			// }
		}
    }

    public function generation2(){
		if ($this->request->is('post')){
	    	$question_types = $this->Question->QuestionType->find('list', array('fields' => array('controller', 'name')));
			$author = $this->Auth->user('id');
			$num_question = (int)$this->request->data['n'];
			$this->set(compact('question_types','author','num_question'));
	    	$this->layout = false;
			$this->render();
    	}
    }
}
