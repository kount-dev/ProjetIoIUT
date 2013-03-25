<?php
App::uses('QuestionsController', 'Controller');
App::uses('iQuestions', 'Interfaces');
App::uses('Xml', 'Controller/Component');

class QcusController extends QuestionsController implements iQuestions {
    public $component = array('Xml');

/**
 * index method
 *
 * @return void
 */
    public function index() {
    }

/**
 *@desc Cette fonction permet de charger, si besoin est, un fichier
 *@param array $param ('path'=>string)
 *@return true|false en fonction du succès ou non du chargement
 */
    public function load($aParam){}
/**
 *@desc Cette fonction permet d'executer un module, elle doit retourner l'HTML a afficher
 *pour l'execution
 *@return le contenu HTML dans un string
 */
    public function executeToHTML(){}

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

/**
*
*
**/
    public function generationXML($aDAta = array()){
        $nId = 3; //$aData['id'];
        $sAuthor = "AuteurTest"; //$aData['author']
        $nDifficulty = 3; //$aData['difficulty']
        $sTextQuestion = "2+2 = ?"; //$aData['text']
        $aChoice = array("0" => "test", "1" => "test2", "2" => "test3", "3" => 4); //$aData['Choice']
        $nAnswer = 3; //$aData['Rep']
        $nPoints = 1; //$aData['points']

        $domDocument = new DomDocument('1.0', "UTF-8");
        $domDocument->formatOutput = true;
        $eQuestion = $domDocument->createElement('question');
        $eQuestionType = $domDocument->createAttribute('type');
        $eQuestionType->value = "choixUnique";
        $domDocument->appendChild($eQuestion);
        $eQuestion->appendChild($eQuestionType);
        
        $eId = $domDocument->createElement('id');
        $eIdText = $domDocument->createTextNode(trim($nId));
        $eQuestion->appendChild($eId);
        $eId->appendChild($eIdText);

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