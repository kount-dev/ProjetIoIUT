<?php
//App::uses('AppController', 'Controller');
/**
* AbstractsQuestions Class
*/

interface iQuestions {

/**
 * index method
 *
 * @return void
 */
    public function index();


/**
 * load method
 *
 * @desc Cette fonction permet de charger un fichier xml d'une question à choix unique
 * @param string $sPath_fileXML
 * @return void
 */
    public function load($sPath_fileXML);

/**
 * displayXmlToHtml
 *
 * @desc Cette fonction permet l'affichage d'une question
 * @param $sPath_fileXML (chemin du XML de la question)
 * @return void
 */
    public function displayXmlToHtml($sPath_fileXML = "");

/**
 * displayWithReponses method
 *
 * @desc Cette fonction retourne le feedback d'une question
 * @param array $aData, string $sPath_fileXML
 * @return string $sHTML
 */
    public function displayWithReponses($aData, $sPath_fileXML);

/**
 * correction method
 *
 * @desc cette fonction corrige une question
 * @param array $aData, string $sPath_fileXML
 * @return array $aRes (array de resultat)
 */
    public function correction($aData, $sPath_fileXML);

/**
 * add method
 *
 * @desc Cette fonction permet de generer une question, elle doit retourner l'HTML a afficher pour la generation
 * @return void
 */
    public function add();

/**
 * edit method
 *
 * @desc Cette fonction permet d'éditer une question, elle doit retourner l'HTML a afficher pour l'edition
 * @param string $namefile (nom du fichier de la question)
 * @return void
 */
    public function edit($namefile = null);

/**
 * saveQuestion method
 *
 * @param array $theQuestion
 * @desc cette function sauvegarde l'ajout
 * @return void
 */
    public function saveQuestion($theQuestion);

/**
 * saveEditQuestion method
 *
 * @param array $theQuestion
 * @desc cette fonction sauvegarde l'edition
 * @return void
 */
    public function saveEditQuestion($theQuestion);

/**
 * addChoice method
 *
 * @desc cette function fait appel la vue d'ajout choix
 * @return void
 */
    public function addChoice();

/**
 * addEditChoice method
 *
 * @desc cette fonction fait appel la vue d'edition d'un choix
 * @return void
 */
     public function addEditChoice();

/**
 * generationXML method
 *
 * @desc cette fonction génère le fichier XML de la question
 * @param array $aData
 * @return void
 */
    public function generationXML($aData = array());

}
?>
