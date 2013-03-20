<?php
/**
* AbstractsQuestions Class
*/
class AbstractsQuestions
{

//Info générales
    private $author='';//L'auteur du QCM
    private $nombre_point='';//Le nom du QCM
    private $sType='';//Le type du QCM
    private $sMatiere='';//La matière du QCM
    private $iId=0;//L'id du QCM
    private $iMinimumPoints=0;//Le minimum de points recquis pour le QCM
    private $iTotalPoints=0;//Le nombre total de points disponible dans le QCM


/**
 *@desc Le constructeur de la classe, il n'y a rien à spécifier.
 */
    function __construct(argument)
    {
        //rien a specifier
    }

/**
 *@desc Cette fonction permet de charger, si besoin est, un fichier
 *@param array $param ('path'=>string)
 *@return true|false en fonction du succès ou non du chargement
 */
    public abstract function load($param);

/**
 *@desc Cette fonction permet d'executer un module, elle doit retourner l'HTML a afficher
 *pour l'execution
 *@return le contenu HTML dans un string
 */
    public abstract function executeToHTML();

/**
 *@desc Cette fonction permet de créer un module, elle doit retourner l'HTML a afficher
 *pour la création
 *@param string $urlRedirection : l'url sur laquelle devra pointer l'envoi du module
 *@return le contenu HTML dans un string
 */
    public abstract function creationToHTML($urlRedirection);


/**
 *@desc cette fonction valide le module a partir des paramètres passés
 *@param array $param ('reponses'=>array(), 'path'=>string)
 *@return boolean true | false en fonctio de s'il est bon
 */
    public abstract function valider($param);

/**
 *@desc cette fonction est celle qui gère l'ajout en base de données et création
 *éventuelle des fichiers
 *@param array $param ('infos'=>array) (infos est en fait la variable POST)
 *@return boolean true|false en fonction du succès ou non de la sauvegarde
 */
    public abstract function saveFromPost($param);

/**
 *@desc Cette fonction va sauvegarder en base l'instance chargée
 */
    public abstract function saveInstance();

    public function getId(){ return $this->iId;}
    public function setId($val){ $this->iId=$val;}
    public function getAuteur(){ return $this->sAuteur;}
    public function setAuteur($val){ $this->sAuteur=$val;}
    public function getUtilisateur(){ return $this->iUtilisateur;}
    public function setUtilisateur($val){ $this->iUtilisateur=$val;}
}
?>