<?php
App::uses('QuestionsController', 'Controller');
App::uses('iQuestions', 'Interfaces');

class QcmsController extends QuestionsController implements iQuestions {
    public $uses = array();
/**
 * index method
 *
 * @return void
 */
    public function index() {
    }


/**
 * load method
 *
 * @desc Cette fonction permet de charger un fichier xml d'une question à choix unique
 * @param string $sPath_fileXML
 * @return void
 */
    public function load($sPath_fileXML){
        $aFileXML = array();
        set_error_handler(function(){throw new Exception('fichier inexistant');});
        try{
            $oFileXML = simplexml_load_file($sPath_fileXML);
        }
        catch(Exception $e){
            return "Erreur de chargement du fichier";
        }

        foreach ($oFileXML->attributes() as $TYPE => $TYPEVAL) {
            $aFileXML['question'][(string)$TYPE] = (string)$TYPEVAL ;
        }

        foreach ($oFileXML as $ATTR => $VAL) {
            if("choice" == $ATTR){
                $nCpt = 0;
                foreach ($VAL as $OPTION => $CHOICE) {
                    foreach ($CHOICE->attributes() as $NUM => $NUMVAL) {
                        $aFileXML['question']["option"][(string)$NUMVAL] = (string)$CHOICE;
                    }
                    $nCpt ++;
                }
            }
            else if("disciplines" == $ATTR){
                $nCpt = 0;
                foreach ($VAL as $DISCIPLINE => $VALUE) {
                    $aFileXML['question']['disciplines'][$nCpt] = (string)$VALUE;
                    $nCpt ++;
                }
            }
            else if("answers" == $ATTR){
                $nCpt = 0;
                foreach ($VAL as $DISCIPLINE => $VALUE) {
                    $aFileXML['question']['answers'][$nCpt] = (string)$VALUE;
                    $nCpt ++;
                }
            }
            else {
                $aFileXML['question'][(string)$ATTR] = (string)$VAL;
            }
        }
        return $aFileXML;
    }

/**
 * displayXmlToHtml
 *
 * @desc Cette fonction permet l'affichage d'une question
 * @param $sPath_fileXML (chemin du XML de la question)
 * @return void
 */
    public function displayXmlToHtml($sPath_fileXML = ""){
        return $this->load("../../uploads/questions/".$sPath_fileXML);
    }

/**
 * displayWithReponses method
 *
 * @desc Cette fonction retourne le feedback d'une question
 * @param array $aData, string $sPath_fileXML
 * @return string $sHTML
 */
    public function displayWithReponses($aData, $sPath_fileXML){

        $aFileXML = $this->load("../../uploads/questions/".$sPath_fileXML);

        $sHTML = '<div><p>' . $aFileXML['question']['text'] . '</p>';
        $sHTML .= '<ul>';

        foreach ($aFileXML['question']['option'] as $key => $value) {
            $sHTML .= '<li>' . $value;
            $bDataTest = false;
            foreach ($aData as $DataRep) {
                if($DataRep == $key){
                    $bTest = false;
                    foreach ($aFileXML['question']['answers'] as $Rep) {
                        if($Rep == $key){
                            $bDataTest = true;
                            $bTest = true;
                            $sHTML .= "    <==== La bonne réponse et également votre réponse";
                        }
                    }
                    if($bTest == false){
                        $bDataTest = true;
                        $sHTML .= "    <==== Votre réponse";
                    }
                }
            }
            if($bDataTest == false){
                foreach ($aFileXML['question']['answers'] as $Rep) {
                    if($Rep == $key){
                        $sHTML .= "    <==== La bonne réponse";
                    }
                }
            }
            $sHTML .= '</li>';
        }
        $sHTML .= '</ul></div><br/>';

        return $sHTML;

    }
/**
 * correction method
 *
 * @desc cette fonction corrige une question
 * @param array $aData, string $sPath_fileXML
 * @return array $aRes (array de resultat)
 */
    public function correction($aData, $sPath_fileXML){

        $aFileXML = $this->load("../../uploads/questions/".$sPath_fileXML);

        $aRes = array();
        $aRes['points_user'] = 0;

        foreach ($aFileXML['question']['answers'] as $Rep) {
            foreach ($aData as $DataRep) {
                if($Rep == $DataRep){
                    $aRes['points_user'] += ($aFileXML['question']['points']/count($aFileXML['question']['answers']));
                }
            }
        }

        $aRes['max_points'] = $aFileXML['question']['points'];

        return $aRes;

    }

/**
 * add method
 *
 * @desc Cette fonction permet de generer une question, elle doit retourner l'HTML a afficher pour la generation
 * @return void
 */
    public function add(){
        if ($this->request->is('post')){
            $author = $this->Auth->user('id');
            $tab = split('_',$this->request->data['f']);
            $num_question = $tab[1];
            $this->set(compact('author','num_question'));
            $this->layout = false;
            $this->render();
        }
    }

/**
 * edit method
 *
 * @desc Cette fonction permet d'éditer une question, elle doit retourner l'HTML a afficher pour l'edition
 * @param string $namefile (nom du fichier de la question)
 * @return void
 */
    public function edit($namefile = null){
        $aFileXML = $this->load('../../uploads/questions/' . $namefile);
        $this->set(compact('aFileXML'));
        $this->layout = false;
    }

/**
 * saveQuestion method
 *
 * @param array $theQuestion
 * @desc cette function sauvegarde l'ajout
 * @return void
 */
    public function saveQuestion($theQuestion){
        $this->loadModel('Question');
        $this->loadModel('User');
        parent::saveQuestion($theQuestion);

        $data = array();
        $data['id'] = $this->Question->id;
        $data['author'] = $this->User->field('username', array('id' => $theQuestion['Question']['user_id']));
        $data['difficulty'] = $theQuestion['Question']['difficulty'];
        $data['text'] = $theQuestion['content']['question'];
        $data['choices'] = $theQuestion['content']['choices'];
        $data['rep'] = $theQuestion['content']['answers'];
        $data['points'] = $theQuestion['Question']['points'];
        $data['disciplines'] = $theQuestion['Discipline'];
        if(isset($theQuestion['Question']['namefile']) && !empty($theQuestion['Question']['namefile'])){
            $data['namefile'] = $theQuestion['Question']['namefile'];
        }

        $this->generationXML($data);

        $this->Question->saveField('namefile', 'qcm_'.$data['id'].'_'.date("Y-m-d").'.xml');
    }

/**
 * saveEditQuestion method
 *
 * @param array $theQuestion
 * @desc cette fonction sauvegarde l'edition
 * @return void
 */
    public function saveEditQuestion($theQuestion){
        $this->loadModel('Question');
        $this->loadModel('User');
        parent::saveQuestion($theQuestion);

        $data = array();
        $data['id'] = $this->Question->id;
        $data['author'] = $this->User->field('username', array('id' => $theQuestion['Question']['user_id']));
        $data['difficulty'] = $theQuestion['Question']['difficulty'];
        $data['text'] = $theQuestion['Question']['content']['question'];
        $data['choices'] = $theQuestion['Question']['content']['choices'];
        $data['rep'] = $theQuestion['Question']['content']['answers'];
        $data['points'] = $theQuestion['Question']['points'];
        $data['disciplines'] = $theQuestion['Discipline']['Discipline'];
        $data['namefile'] = $theQuestion['Question']['namefile'];

        $this->generationXML($data);
    }

/**
 * addChoice method
 *
 * @desc cette function fait appel la vue d'ajout choix
 * @return void
 */
    public function addChoice(){
        if ($this->request->is('post')){
            $tab = split('_',$this->request->data['f']);
            $num_question = $tab[1];
            $nb_choice = $this->request->data['n'];
            $this->set(compact('nb_choice','num_question'));
            $this->layout = false;
            $this->render();
        }
    }

/**
 * addEditChoice method
 *
 * @desc cette fonction fait appel la vue d'edition d'un choix
 * @return void
 */
     public function addEditChoice(){
        if ($this->request->is('post')){
            $nb_choice = $this->request->data['n'];
            $this->set(compact('nb_choice'));
            $this->layout = false;
            $this->render();
        }
    }

/**
 * generationXML method
 *
 * @desc cette fonction génère le fichier XML de la question
 * @param array $aData
 * @return void
 */
    public function generationXML($aData = array()){
        $nId = $aData['id'];
        $sAuthor = $aData['author'];
        $nDifficulty = $aData['difficulty'];
        $sTextQuestion = $aData['text'];
        $aChoice =  $aData['choices'];
        $aAnswers = $aData['rep'];
        $nPoints = $aData['points'];
        $aDisciplines = $aData['disciplines'];

        $domDocument = new DomDocument('1.0', "UTF-8");
        $domDocument->formatOutput = true;
        $eQuestion = $domDocument->createElement('question');
        $eQuestionType = $domDocument->createAttribute('type');
        $eQuestionType->value = "qcm";
        $domDocument->appendChild($eQuestion);
        $eQuestion->appendChild($eQuestionType);

        $eAuthor = $domDocument->createElement('author');
        $eAuthorText = $domDocument->createTextNode(trim($sAuthor));
        $eQuestion->appendChild($eAuthor);
        $eAuthor->appendChild($eAuthorText);

        $eDifficulty = $domDocument->createElement('difficulty');
        $eDifficultyText = $domDocument->createTextNode(trim($nDifficulty));
        $eQuestion->appendChild($eDifficulty);
        $eDifficulty->appendChild($eDifficultyText);

        $eTextQuestion = $domDocument->createElement('text');
        $eTextQuestionText = $domDocument->createCDATASection($sTextQuestion);
        $eQuestion->appendChild($eTextQuestion);
        $eTextQuestion->appendChild($eTextQuestionText);

        $eDisciplines = $domDocument->createElement('disciplines');
        $eQuestion->appendChild($eDisciplines);
        foreach ($aDisciplines as $nCase => $nIdDisci) {
            $eDiscipline = $domDocument->createElement('discipline');

            $eDisciplineText = $domDocument->createTextNode($nIdDisci);

            $eDisciplines->appendChild($eDiscipline);
            $eDiscipline->appendChild($eDisciplineText);
        }

        $eChoice = $domDocument->createElement('choice');
        $eQuestion->appendChild($eChoice);
        foreach ($aChoice as $nNum => $sTextOption) {
            $eOption = $domDocument->createElement('option');

            $eOptionText = $domDocument->createCDATASection($sTextOption);

            $eOptionNum = $domDocument->createAttribute('num');
            $eOptionNum->value = $nNum;

            $eChoice->appendChild($eOption);
            $eOption->appendChild($eOptionNum);
            $eOption->appendChild($eOptionText);
        }

        $eAnswers = $domDocument->createElement('answers');
        $eQuestion->appendChild($eAnswers);
        foreach ($aAnswers as $nCase => $nIdAnswer) {
            $eAnswer = $domDocument->createElement('answer');

            $eAnswerText = $domDocument->createTextNode($nIdAnswer);

            $eAnswers->appendChild($eAnswer);
            $eAnswer->appendChild($eAnswerText);
        }

        $ePoints = $domDocument->createElement('points');
        $ePointsText = $domDocument->createTextNode(trim($nPoints));
        $eQuestion->appendChild($ePoints);
        $ePoints->appendChild($ePointsText);

        if(isset($aData['namefile']) && !empty($aData['namefile'])){
            $domDocument->save('../../uploads/questions/'.$aData['namefile']);
        }
        else{
            $domDocument->save('../../uploads/questions/qcm_'.$nId.'_'.date("Y-m-d").'.xml');
        }
    }
}
?>