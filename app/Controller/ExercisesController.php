<?php
App::uses('AppController', 'Controller');
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
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Exercise->create();
			if ($this->Exercise->save($this->request->data)) {
				$this->Session->setFlash(__('The exercise has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The exercise could not be saved. Please, try again.'));
			}
		}
		$disciplines = $this->Exercise->Discipline->find('list');
		$users = $this->Exercise->User->find('list');
		$this->set(compact('disciplines', 'users'));
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
		$disciplines = $this->Exercise->Discipline->find('list');
		$users = $this->Exercise->User->find('list');
		$this->set(compact('disciplines', 'users'));
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
    	if ($this->request->is('post')) {
			$this->Exercise->create();
			if ($this->Exercise->save($this->request->data)) {
				$this->Session->setFlash(__('The exercise has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The exercise could not be saved. Please, try again.'));
			}
		}
    	$disciplines = $this->Exercise->Discipline->find('list');
		$author = $this->Auth->user('id');
		$this->set(compact('disciplines', 'author'));
    }

/**
 *@desc cette fonction valide le module a partir des paramètres passés
 *@param array $param ('reponses'=>array(), 'path'=>string)
 *@return boolean true | false en fonctio de s'il est bon
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
