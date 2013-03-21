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
    public function load($param);

/**
 *@desc Cette fonction permet d'executer un module, elle doit retourner l'HTML a afficher
 *pour l'execution
 *@return le contenu HTML dans un string
 */
    public function executeToHTML();

/**
 *@desc Cette fonction permet de generer une question, elle doit retourner l'HTML a afficher
 *pour la generation
 *@return le contenu HTML dans un string
 */
    public function generation();


/**
 *@desc cette fonction valide le module a partir des paramètres passés
 *@param array $param ('reponses'=>array(), 'path'=>string)
 *@return boolean true | false en fonctio de s'il est bon
 */
    public function valider($param);

/**
 *@desc cette fonction est celle qui gère l'ajout en base de données et création
 *éventuelle des fichiers
 *@param array $param ('infos'=>array) (infos est en fait la variable POST)
 *@return boolean true|false en fonction du succès ou non de la sauvegarde
 */
    public function saveFromPost($param);

/**
 *@desc Cette fonction va sauvegarder en base l'instance chargée
 */
    public function saveInstance();

    //public function getId(){ return $this->$id;}
    //public function setId($val){ $this->$id=$val;}
    //public function getNamefile(){ return $this->$namefile;}
    //public function setNamefile($val){ $this->$namefile=$val;}
    //public function getAuthor(){ return $this->$author;}
    //public function setAuthor($val){ $this->$author=$val;}
    //public function getPoints(){ return $this->$points;}
    //public function setPoints($val){ $this->$points=$val;}
    //public function getDifficulty(){ return $this->$difficulty;}
    //public function setDifficulty($val){ $this->$difficulty=$val;}
    //public function getType(){ return $this->$type;}
    //public function setType($val){ $this->$type=$val;}
}
?>