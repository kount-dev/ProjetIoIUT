<?php
App::uses('QuestionsController', 'Controller');
App::uses('iQuestions', 'Interfaces');

class QcusController extends QuestionsController implements iQuestions {
    public $component = array('Xml');

    protected $aFileXML = null;
/**
 * index method
 *
 * @return void
 */
    public function index() {
    }

/**
 *@desc Cette fonction permet de charger un fichier xml pour une question à choix unique
 *@param string $sPath_fileXML
 */
    public function load($sPath_fileXML){
        if($this->aFileXML === null){
            $this->aFileXML = array();
            set_error_handler(function(){throw new Exception('fichier inexistant');});
            try{
                $oFileXML = simplexml_load_file($sPath_fileXML);
            }
            catch(Exception $e){
                return "Erreur de chargement du fichier";
            }

            foreach ($oFileXML->attributes() as $TYPE => $TYPEVAL) {
                $this->aFileXML['question'][(string)$TYPE] = (string)$TYPEVAL ;
            }

            foreach ($oFileXML as $ATTR => $VAL) {
                if("choice" == $ATTR){
                    $nCpt = 0;
                    foreach ($VAL as $OPTION => $CHOICE) {
                        foreach ($CHOICE->attributes() as $NUM => $NUMVAL) {
                            $this->aFileXML['question']["option"][(string)$NUMVAL] = (string)$CHOICE;
                        }
                        $nCpt ++;
                    }
                }
                else if("disciplines" == $ATTR){
                    $nCpt = 0;
                    foreach ($VAL as $DISCIPLINE => $VALUE) {
                        $this->aFileXML['question']['disciplines'][$nCpt] = (string)$VALUE;
                        $nCpt ++;
                    }
                }
                else {
                    $this->aFileXML['question'][(string)$ATTR] = (string)$VAL;
                }
            }
        }
    }

/**
 *@desc Cette fonction permet l'affichage d'une question
 */
    public function displayXmlToHtml($sPath_fileXML = ""){
        $this->load('../../uploads/questions/qcu_3_2013-03-25.xml');
        if ($this->request->is('post')){
            var_dump('Submit QCU');
        }
        $this->set('data',$this->aFileXML);
        $this->render();
    }


/**
 *@desc Cette fonction permet de generer une question, elle doit retourner l'HTML a afficher
 *pour la generation
 *@return le contenu HTML dans un string
 */
    public function generation(){
        if ($this->request->is('post')){
            $author = $this->Auth->user('id');
            $tab = split('_',$this->request->data['f']);
            $num_question = $tab[1];
            $this->set(compact('author','num_question'));
            $this->layout = false;
            $this->render();
        }
    }


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
        $data['rep'] = $theQuestion['content']['answer'];
        $data['points'] = $theQuestion['Question']['points'];

        QcusController::generationXML($data);

        $this->Question->saveField('namefile', 'qcu_'.$data['id'].'_'.date("Y-m-d").'.xml');
        $this->layout = false;
        $this->render(false);

    }

/**
*
*
**/

    public function generationXML($aData = array()){
        $nId = $aData['id'];
        $sAuthor = $aData['author'];
        $nDifficulty = $aData['difficulty'];
        $sTextQuestion = $aData['text'];
        $aChoice =  $aData['choices'];
        $nAnswer = $aData['rep'];
        $nPoints = $aData['points'];

        $domDocument = new DomDocument('1.0', "UTF-8");
        $domDocument->formatOutput = true;
        $eQuestion = $domDocument->createElement('question');
        $eQuestionType = $domDocument->createAttribute('type');
        $eQuestionType->value = "qcu";
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

        $eAnswer = $domDocument->createElement('answer');
        $eAnswerText = $domDocument->createTextNode(trim($nAnswer));
        $eQuestion->appendChild($eAnswer);
        $eAnswer->appendChild($eAnswerText);

        $ePoints = $domDocument->createElement('points');
        $ePointsText = $domDocument->createTextNode(trim($nPoints));
        $eQuestion->appendChild($ePoints);
        $ePoints->appendChild($ePointsText);

        $domDocument->save('../../uploads/questions/qcu_'.$nId.'_'.date("Y-m-d").'.xml');

        $this->layout = false;
        $this->render(false);
    }

/*
 *@desc cette fonction valide le module a partir des paramètres passés
 *@param array $param ('reponses'=>array(), 'path'=>string)
 *@return boolean true | false en fonction de s il est bon
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
?>