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
		$iutgroups = $this->Exercise->IutGroup->find('list');
		$this->set(compact('users', 'disciplines', 'questions', 'iutgroups'));
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
		//$questions = $this->Exercise->Question->find('list');
		$iutgroups = $this->Exercise->IutGroup->find('list');
		$this->set(compact('disciplines', 'author', 'questions','iutgroups'));
	}


public function import(){
	if ($this->request->is('post') && isset($this->request->data['Exercise']['xmlFile'])) {
		
		// Traitement pour un fichier zip
		if($this->request->data['Exercise']['xmlFile']['type'] == 'application/zip'){
			$zip = new ZipArchive;
			// Extraction des xml
			if ($zip->open($this->request->data['Exercise']['xmlFile']['tmp_name'])) {
				for ($i = 0; $i < $zip->numFiles; $i++) {
					$zip->extractTo('../../uploads/zip', $zip->getNameIndex($i));
			    	$aFiles[] = '../../uploads/zip/' . $zip->getNameIndex($i);
			 	}
			}
			$zip->close();

			// Import des fichiers xml
			foreach ($aFiles as $sPathFile) {
				$this->importDataXML($sPathFile);
			}
		}
		// Traitement pour un fichier xml 
		else if($this->request->data['Exercise']['xmlFile']['type'] == 'text/xml'){
			$file = $this->request->data['Exercise']['xmlFile']['tmp_name'];
			$this->importDataXML($file);
		}
		$this->redirect(array('action' => 'index'));	
	}
}

public function importDataXML($file = null){
	if($file != null){

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
			            if("disciplines" != $ATTR && "questions" != $ATTR && "groups_iut" != $ATTR){
			            	$aDataTmp['Exercise'][(string)$ATTR] = (string)$VAL;
			            }
			            elseif("groups_iut" == $ATTR){
			                $nCpt = 0;
			                foreach ($VAL as $GROUPIUT => $VALUE) {
				            	$aDataTmp['IutGroup']["IutGroup"][$nCpt] = (string)$VALUE;
			            	    $nCpt ++;
			           		}
			        	}
			           	elseif("disciplines" == $ATTR){
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
		$this->loadModel('GroupList');
		$this->loadModel('ExerciseGroupList');
		$this->Exercise->recursive = 0;
		$nXpUser = $this->User->field('xp', array('id' => $this->Auth->user('id')));
		$aExercises = $this->Exercise->find('all', array(
								'fields' => 'DISTINCT(Exercise.id), *',
								'conditions' =>
									'Exercise.id IN (
										SELECT DISTINCT `Exo`.`id`
										FROM `exercises` AS `Exo`
										LEFT JOIN `exercise_group_lists` AS ExoGrpL ON ExoGrpL.exercise_id = Exo.id
										LEFT JOIN `group_lists` AS `GroupL` ON (GroupL.iut_group_id = ExoGrpL.iut_group_id AND GroupL.user_id = 4)
										WHERE minimum_points <= '.$nXpUser.'
										AND ((opening_date = closing_date) OR (NOW() BETWEEN opening_date AND closing_date))
										ORDER BY Exo.id DESC)'
				));

		foreach ($aExercises as $key => $aExercise) {
			$aUser = $this->User->find('first', array('conditions' => array('User.id =' => $aExercise['Exercise']['user_id'])));
			$aResult[$key]['User']['username'] = $aUser['User']['username'];
			$aResult[$key]['Exercise'] = $aExercise['Exercise'];
		}

		$this->set('exercises', $aResult);
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
}
