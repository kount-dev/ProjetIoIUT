<?php
App::uses('AppController', 'Controller');
App::uses('QuestionsController', 'Controller');

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

	public function displayUserLog(){
		$this->loadModel('User');
		$this->Answer->recursive = 0;
		$this->set('answers', $this->paginate(array('Answer.user_id = ' . $this->Auth->user('id'))));
		$this->render('index');
	}

	public function displayByIdExercise($nIdExercise,$nIdUser = null){
		$aParams = array('Answer.exercise_id =' . $nIdExercise);
		if($nIdUser == -1){
			$aParams = array('Answer.exercise_id =' . $nIdExercise, 'Answer.user_id = ' . $this->Auth->user('id'));
		}
		$this->loadModel('User');
		$this->Answer->recursive = 0;
		$this->set('answers', $this->paginate($aParams));
		$this->render('index');
	}

	public function displayByIdUser($nIdUser){
		$this->loadModel('User');
		$this->Answer->recursive = 0;
		$this->set('answers', $this->paginate(array('Answer.user_id = ' . $nIdUser)));
		$this->render('index');
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
			}
			else{
				$this->Session->setFlash(__('The answer could not be saved. Please, try again.'));
			}
		}
		$users = $this->Answer->User->find('list', array('fields' => array('id','username')));
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
		$users = $this->Answer->User->find('list', array('fields' => array('id','username')));
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
			$answer = $this->request->data['Answer']['Answer'];
			$user_id = $answer['user_id'];
			$answer['attempt_number'] = $this->Answer->find('count', array('user_id' => $user_id, 'exercise_id' => $this->request->data['Answer']['Answer']['exercise_id'])) + 1;

			$this->Answer->create();
			if ($this->Answer->save($answer))
			{
				$this->Answer->saveField('namefile', $this->Answer->id.'_'.date("Y-m-d").'.xml');
				$data = array('id' => $this->Answer->id, 'user' => $user_id, 'Answers' => $this->request->data['Answer']['Questions']);
				$this->generationXML($data);
				$this->Session->setFlash(__('The answer has been saved'));

				$successRatePourcentage = $this->successRate($this->request->data['Answer']['Answer']['exercise_id'], $this->Answer->id);

				$this->Answer->updateAll(
				    array('Answer.success_rate' => $successRatePourcentage),
				    array('Answer.id =' => (int)$this->Answer->id)
				);

				$this->redirect(array('action' => 'displayByIdUser', $user_id));
			} else {
				$this->Session->setFlash(__('The answer could not be saved. Please, try again.'));
			}
		}
	}

	public function generationXML($aData = array()){
        $nId = $aData['id']; // Id de la réponse
        $sUser = $aData['user']; // Id du "Répondeur"
        $aAnswers =  $aData['Answers']; // array( 'typeQuestion' => array( 'IdQuestion' => array('1', '2') 	ou string "1"))

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

    public function readXMLAnswer($nIdExercise = null, $nIdAnswer = null){
    	$this->loadModel('Exercise');
    	$this->loadModel('Question');
    	$this->loadModel('QuestionType');
    	$this->Folder->ImportTypeQuestion();

    	$aFileXML = array();

    	if ($this->Exercise->exists($nIdExercise) && $this->Answer->exists($nIdAnswer)) {

    		$sNameFile = $this->Answer->field('namefile', array('id' => $nIdAnswer, 'exercise_id' => $nIdExercise));

    		$aFileXML = array();

	        set_error_handler(function(){throw new Exception('fichier inexistant');});

	        try{

	            $oFileXML = simplexml_load_file('../../uploads/reponses/' . $sNameFile);

        	}

        	catch(Exception $e){

        	    return "Erreur de chargement du fichier";

    	    }

		 	foreach ($oFileXML as $ATTR => $VAL) {

		 		if("questions" == $ATTR){

					foreach ($VAL as $QUESTION => $QUESTIONVAL) {

			            if("questionAnswer" == $QUESTION){

			            	$IDQuestion = '';

					        foreach ($QUESTIONVAL->attributes() as $ID => $IDVAL) {

					        	$IDQuestion = (int)$IDVAL;

					        }

			                foreach ($QUESTIONVAL as $ANSWER => $ANSWERVAL) {

			                	$aFileXML['question'][$IDQuestion][] = (int)$ANSWERVAL;

			                }
			            }
			        }
			    }
		    }

		    return $aFileXML;

		}
		else{

			return false;

		}
	}

	public function feedback($nIdExercise = null, $nIdAnswer = null){
		$aFileXML = $this->readXMLAnswer($nIdExercise, $nIdAnswer);

		if($aFileXML !== false){

		 	$_html = '';

		 	foreach ($aFileXML['question'] as $key => $value) {

		 		$sNameFile = $this->Question->field('namefile', array('id' => $key));

		 		$nIdTypeQuestion = $this->Question->field('question_type_id', array('id' => $key));

		 		$sController = $this->QuestionType->field('controller', array('id = ' => $nIdTypeQuestion))."sController";

		 		$Question = new $sController();

		 		$_html .= $Question->displayWithReponses($value,$sNameFile);

		 	}

		 	$this->set(array('html'=> $_html));

	    }
	    else{

	    	$_html = 'Mauvaise informations';

	    	$this->set(array('html'=> $_html));

	    }

    }

    public function successRate($nIdExercise = null, $nIdAnswer = null){
    	$this->loadModel('Answer');
    	$this->loadModel('User');

    	$aFileXML = $this->readXMLAnswer($nIdExercise, $nIdAnswer);

    	$fPourcentage = 0;
		if($aFileXML !== false){

			$nTotal_Exercise = 0;
			$nTotal_User = 0;
		 	foreach ($aFileXML['question'] as $key => $value) {

		 		$sNameFile = $this->Question->field('namefile', array('id' => $key));

		 		$nIdTypeQuestion = $this->Question->field('question_type_id', array('id' => $key));

		 		$controller = $this->QuestionType->field('controller', array('id = ' => $nIdTypeQuestion))."sController";

		 		$Question = new $controller();

		 		$aRes = $Question->correction($value,$sNameFile);

				$nTotal_Exercise += $aRes['max_points'];

				$nTotal_User += $aRes['points_user'];

		 	}

		 	$fPourcentage = ($nTotal_User / $nTotal_Exercise) * 100;

            $nbRealisations = $this->Answer->find('count', array('fields' => array('Answer.id'), 'conditions' => array('Answer.exercise_id' => $nIdExercise, 'Answer.user_id' => $this->Auth->user('id'))));

            $fNouvelleXP = $this->User->field('xp', array('id' => $this->Auth->user('id'))) + $this->scoreEnFonctionNbRealisations($nbRealisations, $nTotal_User);

            // $this->calculPoints($fPourcentage, $nTotal_Exercise, $nIdExercise, $nIdAnswer);
		 	$this->Answer->updateAll(
			    array('User.xp' => $fNouvelleXP),
			    array('User.id =' => $this->Auth->user('id'))
			);

	    }

	    $this->layout = false;
	    $this->render(false);

	    return $fPourcentage;

    }

   //  public function calculPoints($fPourcentage, $nTotal_Exercise, $nIdExercise, $nIdAnswer){
   //  	$this->loadModel('User');
   //  	$this->loadModel('Answer');

   //  	$nNbAnswer = $this->Answer->find('count', array('fields' => 'Answer.id', 'conditions' => array('Answer.exercise_id' => $nIdExercise, 'Answer.user_id' => $this->Auth->user('id'))));

   //  	if($nNbAnswer == 1) $nTaux = 1;
   //  	else {
   //  		$nTaux = 0.8;
   //  		$nNbAnswer -= 1;
   //  	}

	 	// return ((($nTaux * $nNbAnswer)/$nNbAnswer) * ($nTotal_Exercise * ($fPourcentage / 100))) + $this->User->field('xp', array('id' => $this->Auth->user('id')));

   //  }
    /**
	*@desc Cette fonction transforme un nombre de tentative et un nombre de points 'score' (degressif)
	*@param int $nbPoints
	*@param int $nbReussite
	*@return int $score
	*/
	public function scoreEnFonctionNbRealisations($nbReussite, $pointsGagnesParExec){
	    $malus = round(1/exp($nbReussite/2.5), 2);
	    $score = $pointsGagnesParExec * $malus;
	    return $score;
	}
}