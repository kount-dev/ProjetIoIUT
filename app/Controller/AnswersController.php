<?php
App::uses('AppController', 'Controller');
/**
 * Answers Controller
 *
 * @property Answer $Answer
 */
class AnswersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Answer->recursive = 0;
		$this->set('answers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Answer->exists($id)) {
			throw new NotFoundException(__('Invalid answer'));
		}
		$options = array('conditions' => array('Answer.' . $this->Answer->primaryKey => $id));
		$this->set('answer', $this->Answer->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Answer->create();
			if ($this->Answer->save($this->request->data)) {
				$this->Session->setFlash(__('The answer has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The answer could not be saved. Please, try again.'));
			}
		}
		$users = $this->Answer->User->find('list');
		$exercises = $this->Answer->Exercise->find('list');
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
		if (!$this->Answer->exists($id)) {
			throw new NotFoundException(__('Invalid answer'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Answer->save($this->request->data)) {
				$this->Session->setFlash(__('The answer has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The answer could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Answer.' . $this->Answer->primaryKey => $id));
			$this->request->data = $this->Answer->find('first', $options);
		}
		$users = $this->Answer->User->find('list');
		$exercises = $this->Answer->Exercise->find('list');
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
		$this->Answer->id = $id;
		if (!$this->Answer->exists()) {
			throw new NotFoundException(__('Invalid answer'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Answer->delete()) {
			$this->Session->setFlash(__('Answer deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Answer was not deleted'));
		$this->redirect(array('action' => 'index'));
	}


	public function saveAnswer(){
		if ($this->request->is('post')) {
			var_dump($this->request->data);
			//TODO save Answer
		}
		else {
			$this->Session->setFlash(__('Pas de variables posts'));
			var_dump('Pas de variables posts');
		}
	}

	public function generationXML($aData = array()){
        $nId = 1;//$aData['id']; // Id de la réponse
        $sUser = 'quentin';//$aData['user']; // Nom du "Répondeur"
        $aAnswers = array('Qcus' => array('1' => "2", '4' => "8"), 'Qcms' => array('3' => array('1', '2', '3'), '2' => array('ehjbds', 'dsbfd', 'jkdfd', 'jkdf'), '2' => array('ehjbds')));  //$aData['Answers']; 
        /* $aData['Answers'] = array( 'typeQuestion' => 
        								array( 'IdQuestion' =>
        									array('1', '2')
        										ou
        									string "1"))

		*/

        $domDocument = new DomDocument('1.0', "UTF-8");
        $domDocument->formatOutput = true;
        $eAnswers = $domDocument->createElement('answers');
        $domDocument->appendChild($eAnswers);

        $eUser = $domDocument->createElement('user');
        $eUserText = $domDocument->createTextNode(trim($sUser));
        $eAnswers->appendChild($eUser);
        $eUser->appendChild($eUserText);

        $eQuestions = $domDocument->createElement('questions');
        $eAnswers->appendChild($eQuestions);
      	foreach ($aAnswers as $sType => $aArray) {
      		foreach ($aArray as $nIdQuestion => $mAnswer) {

      			$eQuestionAnswer = $domDocument->createElement('questionAnswer');
      			
      			$eQuestionId = $domDocument->createAttribute('IdQuestion');
           		$eQuestionId->value = $nIdQuestion;
           	
           		$eQuestions->appendChild($eQuestionAnswer);
	            $eQuestionAnswer->appendChild($eQuestionId);

      			if (is_array($mAnswer)) {
      				foreach ($mAnswer as $mValue) {
      					$eAnswer = $domDocument->createElement('answer');
	           			$eAnswerText = $domDocument->createCDATASection($mValue);
	           			$eAnswer->appendChild($eAnswerText);
		           		$eQuestionAnswer->appendChild($eAnswer);
      				}
      			}
      			else if (is_string($mAnswer)){
      				$eAnswer = $domDocument->createElement('answer');
           			$eAnswerText = $domDocument->createCDATASection($mAnswer);
           			$eAnswer->appendChild($eAnswerText);
	           		$eQuestionAnswer->appendChild($eAnswer);
      			}
      		}
      	}

        $domDocument->save('../../uploads/reponses/'.$nId.'_'.date("Y-m-d").'.xml');
    }

}
