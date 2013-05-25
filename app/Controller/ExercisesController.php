<?php
App::uses('AppController', 'Controller');
App::uses('QuestionsController', 'Controller');

/**
 * Exercises Controller
 *
 * @property Exercise $Exercise
 */
class ExercisesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Exercise->recursive = 0;
		$this->set('exercises', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Exercise->exists($id)) {
			throw new NotFoundException(__('Invalid exercise'));
		}
		$options = array('conditions' => array('Exercise.' . $this->Exercise->primaryKey => $id));
		$this->set('exercise', $this->Exercise->find('first', $options));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Exercise->exists($id)) {
			throw new NotFoundException(__('Invalid exercise'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Exercise->save($this->request->data)) {
				$this->Session->setFlash(__('The exercise has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The exercise could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Exercise.' . $this->Exercise->primaryKey => $id));
			$this->request->data = $this->Exercise->find('first', $options);
		}
		$users = $this->Exercise->User->find('list', array('fields' => array('id','username')));
		$disciplines = $this->Exercise->Discipline->find('list');
		$questions = $this->Exercise->Question->find('list');
		$this->set(compact('users', 'disciplines', 'questions'));
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
		$this->Exercise->id = $id;
		if (!$this->Exercise->exists()) {
			throw new NotFoundException(__('Invalid exercise'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Exercise->delete()) {
			$this->Session->setFlash(__('Exercise deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Exercise was not deleted'));
		$this->redirect(array('action' => 'index'));
	}


/**
 *@desc Cette fonction permet de charger, si besoin est, un fichier
 *@param array $param ('path'=>string)
 *@return true|false en fonction du succès ou non du chargement
 */
    public function load($aParam){}

/**
 *@desc Cette fonction permet l'affichage d'une question
 */
    public function displayXmlToHtml($idExercise){

        $exercice = $this->Exercise->find('all', array('conditions' => array('id ==' => $idExercise)));
        $this->render(false);
    }


/**
 *@desc Cette fonction permet de generer une question, elle doit retourner l'HTML a afficher
 *pour la generation
 *@return le contenu HTML dans un string
 */
public function add(){
	if ($this->request->is('post')) {
		$this->Folder->ImportTypeQuestion();

		$this->loadModel('QuestionType');

		$this->Exercise->create();
		if ($this->Exercise->save($this->request->data['Exercise']))
		{
			foreach ($this->request->data['Question'] as $theQuestion) {
				$controller = $this->QuestionType->field('controller', array('id = ' => $theQuestion['Question']['question_type_id']))."sController";
				$Question = new $controller();
				$Question->saveQuestion($theQuestion);
			}
			$this->Session->setFlash(__('The exercise has been saved'));
			$this->redirect(array('action' => 'index'));
		} else {
			$this->Session->setFlash(__('The exercise could not be saved. Please, try again.'));
		}
	}

	$disciplines = $this->Exercise->Discipline->find('list');
	$author = $this->Auth->user('id');
	$this->set(compact('disciplines', 'author'));
}

public function import(){
	if ($this->request->is('post') && isset($this->request->data['Exercise']['xmlFile'])) {
		$file = $this->request->data['Exercise']['xmlFile']['tmp_name'];

		if($this->Xml->XMLIsValide('exercise', $file, "../../dtd/exercise.dtd")){
			$oXml = new XMLReader();
			$oXml->open($file);

			// Récupération des Questions
			$nCtp = 0;
		 	while ($oXml->read()) {
		 		if($oXml->name == "question" && $oXml->nodeType == XMLReader::ELEMENT){
			 		$test = new XMLWriter();
			 		$nCtp++;
		 			$test->openURI('../../uploads/QuestionTemporaire'.$nCtp.'.xml');
		 			$test->writeRaw($oXml->readOuterXML());
		 		}
			}
			$VarTmp = true;
			$aDataTmp= array();
			$Question = new QuestionsController();

			// Validation des questions
			for($i = 1; $i < $nCtp; $i++){
				$aData = $Question->getQuestionType('../../uploads/QuestionTemporaire'.$i.'.xml');
				if(!$this->Xml->XMLIsValide('question','../../uploads/QuestionTemporaire'.$i.'.xml','../../dtd/'.$aData['type'].'.dtd')){
					$VarTmp = false;
				}
			}

			// Enregistrement total
			if($VarTmp){

				$nIdLastQuestion = $this->Exercise->Question->field('id',array(), 'created DESC');
				for($i = 1; $i < $nCtp; $i++){
					$aDataTmp['Question']["Question"][$i-1] = $nIdLastQuestion+$i;
				}

				try{$oFileXML = simplexml_load_file($file);}
		        catch(Exception $e){return "Erreur de chargement du fichier";}

		        foreach ($oFileXML as $ATTR => $VAL) {
		            if("disciplines" != $ATTR && "questions" != $ATTR){
		            	$aDataTmp['Exercise'][(string)$ATTR] = (string)$VAL;
		            }
		           	else if("disciplines" == $ATTR){
		                $nCpt = 0;
		                foreach ($VAL as $DISCIPLINE => $VALUE) {
			            	$aDataTmp['Discipline']["Discipline"][$nCpt] = (string)$VALUE;
		            	    $nCpt ++;
		           		}
		        	}
		        }

	   			$this->loadModel('User');

		        $aDataTmp['Exercise']['user_id'] = $this->User->field('id', array('username' => $aDataTmp['Exercise']['author']));

				$this->Exercise->create();
				if ($this->Exercise->save($aDataTmp)){

					for($i = 1; $i < $nCtp; $i++){
						if(!$Question->saveUploadQuestion('../../uploads/QuestionTemporaire'.$i.'.xml', true)){
							$VarTmp = false;
						}
					}
					if($VarTmp){
						$this->Session->setFlash(__('The exercise has been saved'));
						$this->redirect(array('action' => 'index'));
					}
					else{
						$this->Session->setFlash(__('The exercise could not be saved. Please, try again.'));
					}
				}
				else{
					$this->Session->setFlash(__('The exercise could not be saved. Please, try again.'));
				}
			}
		}
	}
}


public function listByUser(){
	$this->loadModel('User');
	$this->Exercise->recursive = 0;
	$nXpUser = $this->User->field('xp', array('id' => $this->Auth->user('id')));
	$this->set('exercises', $this->paginate(array(
				'minimum_points <= '.$nXpUser.' AND ((`opening_date` = `closing_date) OR (NOW() BETWEEN `opening_date` AND `closing_date`))'
				)));
}

public function display($id = null){
	if (!$this->Exercise->exists($id)) {
		throw new NotFoundException(__('Invalid exercise'));
	}
	else{
		$this->Folder->ImportTypeQuestion();
		$this->loadModel('ExercisesQuestion');
		$this->loadModel('Question');
		$this->loadModel('QuestionType');

		$alistQuestion = $this->ExercisesQuestion->find('list', array('fields' => array('question_id'),'conditions' => array('exercise_id' => $id)));

		$s_HTML = "";
		foreach ($alistQuestion as $nId) {
			if (!$this->Question->exists($nId)) {
				throw new NotFoundException(__('Invalid question'));
			}
			else{
				$sNamefile = $this->Question->field('namefile', array('id' => $nId));
				$sType = $this->QuestionType->field('controller', array('id' => $this->Question->field('question_type_id', array('id' => $nId))));
				$sController = $sType."sController";
				$Question = new $sController();
				$oData = $Question->displayXmlToHtml($sNamefile);
				$this->set(compact('oData', 'nId'));
				$s_HTML .= $this->render('../'.$sType.'s/display_xml_to_html',false);
			}
		}

		//$disciplines = $this->Exercise->Discipline->find('list');
		$s_personCo = $this->Auth->user('id');
		$s_exerciseName = $this->Exercise->field('name', array('id' => $id));
		$n_exerciseId = $id;

		$this->set(compact('s_HTML', 's_personCo', 's_exerciseName', 'n_exerciseId'));
		$this->render('display');
	}
}
/**
 *@desc cette fonction valide le module a partir des paramètres passés
 *@param array $param ('reponses'=>array(), 'path'=>string)
 *@return boolean true | false en fonctio de s'il est bon
 */
    public function valider($param){}
/**
 *@desc cette fonction est celle qui gère l'ajout en base de données et création
 *éventuelle des fichiers
 *@param array $param ('infos'=>array) (infos est en fait la variable POST)
 *@return boolean true|false en fonction du succès ou non de la sauvegarde
 */
    public function saveFromPost($param){}
/**
 *@desc Cette fonction va sauvegarder en base l'instance chargée
 */
    public function saveInstance(){}
}
