<?php
App::uses('QuestionsController', 'Controller');
App::uses('iQuestions', 'Interfaces');

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
        parent::generation();
        if ($this->request->is('post')) {
            $this->Session->setFlash(__('We are here QCus'));
            $this->redirect(array('action' => 'generation'));
        }
        //$this->layout = false;
        //$this->render(false);
    }


/**
 *@desc cette fonction valide le module a partir des paramètres passés
 *@param array $param ('reponses'=>array(), 'path'=>string)
 *@return boolean true | false en fonction de s'il est bon
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



    public function generation2(){
        if ($this->request->is('post')){
            $author = $this->Auth->user('id');
            $tab = split('_',$this->request->data['f']);
            $num_question = $tab[1];
            $this->set(compact('author','num_question'));
            $this->layout = false;
            $this->render();
        }
    }
}
?>