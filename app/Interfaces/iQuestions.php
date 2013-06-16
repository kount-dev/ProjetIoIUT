<?php
//App::uses('AppController', 'Controller');
/**
* AbstractsQuestions Class
*/
interface iQuestions {

//Info générales
    //private $id = 0; //L'id de la question
    //private $namefile = ''; //Le nom du fichier XML de la question
    //private $author = ''; //L'auteur de la question
    //private $points = 0; //Le nombre de points que vaut la question
    //private $difficulty = 0; //Le niveau de difficulte que vaut la question
    //private $type = ''; //Le type de la question

/**
 *@desc Cette fonction permet de charger, si besoin est, un fichier
 *@param array $param ('path'=>string)
 *@return true|false en fonction du succès ou non du chargement
 */
    public function load($sPath_fileXML);

/**
 *@desc Cette fonction permet d'executer un module, elle doit retourner l'HTML a afficher
 *pour l'execution
 *@return le contenu HTML dans un string
 */
    public function displayXmlToHtml($sPath_fileXML);

/**
 *@desc Cette fonction permet de generer une question, elle doit retourner l'HTML a afficher
 *pour la generation
 *@return le contenu HTML dans un string
 */
    public function add();

}
?>