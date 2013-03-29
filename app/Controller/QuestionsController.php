<?php
App::uses('AppController', 'Controller');

/**
 * Questions Controller
 *
 * @property Question $Question
 */
class QuestionsController extends AppController {
	public $components = array('Xml');

	// protected $oFileXMLImport;
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


	public function upload(){
		if ($this->request->is('post') && isset($this->request->data['Question']['xmlFile'])) {
			$aData = array();
            try{
                $oFileXML = simplexml_load_file($this->request->data['Question']['xmlFile']['tmp_name']);
            	foreach ($oFileXML->attributes() as $TYPE => $TYPEVAL) {
	                $aData[(string)$TYPE] = (string)$TYPEVAL;
	            }
            }
            catch(Exception $e){
                return "Erreur de chargement du fichier";
            }
            if($this->Xml->XMLIsValide($this->request->data['Question']['xmlFile']['tmp_name'],'../../dtd/'.$aData['type'].'.dtd')){

            	$aDataTmp = array();

	            foreach ($oFileXML as $ATTR => $VAL) {
		            if("author" == $ATTR || "points" == $ATTR || "difficulty" == $ATTR){
		            	$aDataTmp['Question'][(string)$ATTR] = (string)$VAL;
		            }
		           	else if("disciplines" == $ATTR){
	                    $nCpt = 0;
    	                foreach ($VAL as $OPTION => $CHOICE) {
        	            	$aDataTmp['Discipline']["Discipline"][$nCpt] = (string)$CHOICE;
                    	    $nCpt ++;
		           		}
	            	}
	            }

		        $nUser = $this->Question->User->field('id', array('username' => $aDataTmp['Question']['author']));
		        $nQuestionTypes = $this->Question->QuestionType->field('id', array('controller' => $aData['type']));
		        $nIdNew = $this->Question->field('id',array(), 'created DESC')+1;
				
				// $aDataTmp['Question']['name'] = $nIdNew;
				$aDataTmp['Question']['namefile'] = $aData['type']."_".$nIdNew."_".date("Y-m-d").".xml";
				$aDataTmp['Question']['user_id'] = $nUser;
				$aDataTmp['Question']['question_type_id'] = $nQuestionTypes;
				
				$this->Question->create();
				if ($this->Question->save($aDataTmp)) {
					$this->Session->setFlash(__('The question has been saved'));
					move_uploaded_file($this->request->data['Question']['xmlFile']['tmp_name'], "../../uploads/questions/".$aData['type']."_".$nIdNew."_".date("Y-m-d").".xml");
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The question could not be saved. Please, try again.'));
				}	
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

    public function saveQuestion($theQuestion){
    	$this->Question->create();
        $this->Question->save($theQuestion);
	}
}

