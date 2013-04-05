<?php
App::uses('AppController', 'Controller');
App::uses('Folder', 'Question');

/**
 * Questions Controller
 *
 * @property Question $Question
 */
class QuestionsController extends AppController {

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

	public function beforeFilter() {
        parent::beforeFilter();
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
			if($this->saveUploadQuestion($this->request->data['Question']['xmlFile']['tmp_name'], false)){
				$this->Session->setFlash(__('The question has been saved'));
				$this->redirect(array('action' => 'index'));
			}
			else{
				$this->Session->setFlash(__('The question could not be saved. Please, try again.'));
			}
		}
	}

	public function getQuestionType($sNameFile){
		$aData = array();
		try{
            $oFileXML = simplexml_load_file($sNameFile);
        	foreach ($oFileXML->attributes() as $TYPE => $TYPEVAL) {
                $aData[(string)$TYPE] = (string)$TYPEVAL;
            }
        	return $aData;
        }
        catch(Exception $e){
            return "Erreur de chargement du fichier";
        }
	}

	public function checkDtdUpload($sNameFile, $sType){
		return $this->Xml->XMLIsValide('question',$sNameFile,'../../dtd/'.$sType.'.dtd');
	}

	public function saveUploadQuestion($sNameFile, $ifTestDtd){
		$aData = $this->getQuestionType($sNameFile);

        if($ifTestDtd || $this->checkDtdUpload($sNameFile,$aData['type'])){

        	try{$oFileXML = simplexml_load_file($sNameFile);}
	        catch(Exception $e){return "Erreur de chargement du fichier";}

			$aDataTmp = array();
			$this->loadModel('User');
	        $this->loadModel('QuestionType');
	        $this->loadModel('Question');

	        foreach ($oFileXML as $ATTR => $VAL) {
	            if("author" == $ATTR || "points" == $ATTR || "difficulty" == $ATTR){
	            	$aDataTmp['Question'][(string)$ATTR] = (string)$VAL;
	            }
	           	else if("disciplines" == $ATTR){
	                $nCpt = 0;
	                foreach ($VAL as $DISCIPLINE => $VALUE) {
		            	$aDataTmp['Discipline']["Discipline"][$nCpt] = (string)$VALUE;
	            	    $nCpt ++;
	           		}
	        	}
	        }

	        $nUser = $this->User->field('id', array('username' => $aDataTmp['Question']['author']));
	        $nQuestionTypes = $this->QuestionType->field('id', array('controller' => $aData['type']));
	        sleep(1);
	        $nIdNew = $this->Question->field('id',array(), 'created DESC')+1;

			$aDataTmp['Question']['namefile'] = $aData['type']."_".$nIdNew."_".date("Y-m-d").".xml";
			$aDataTmp['Question']['user_id'] = $nUser;
			$aDataTmp['Question']['question_type_id'] = $nQuestionTypes;

			$this->Question->create();
			if ($this->Question->save($aDataTmp)) {
				rename($sNameFile, "../../uploads/questions/".$aData['type']."_".$nIdNew."_".date("Y-m-d").".xml");
				return true;
			} else {
				return false;
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
		$namefile = $this->Question->field('namefile', array('id' => $id));
		$this->request->onlyAllow('post', 'delete');
		if ($this->Question->delete()) {
			if(file_exists('../../uploads/questions/'.$namefile)){
				unlink('../../uploads/questions/'.$namefile);
			}
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

