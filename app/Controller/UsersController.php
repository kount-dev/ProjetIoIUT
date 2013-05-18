<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {

	public $helpers = array('Js' => array('Jquery'),'Html','Form');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if($id == null){
			$id = $this->Auth->user('id');
		}
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	public function beforeFilter() {
	    parent::beforeFilter();
	    $this->Auth->allow('index', 'view');
	}
	public function login() {
		if ($this->Session->read('Auth.User')) {
	        $this->Session->setFlash('Vous êtes connecté!');
	        $this->redirect('/', null, false);
	    }
		else if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
	            $this->redirect($this->Auth->redirect());
	        } else {
	            $this->Session->setFlash('Votre nom d\'user ou mot de passe sont incorrects.');
	        }
	    }
	}

	public function logout() {
	    $this->Session->setFlash('Au-revoir');
		$this->redirect($this->Auth->logout());
	}

	public function leaderboard(){
		$aLeaderboard = $this->User->find('all', array('conditions' => array('User.xp >' => '0'), 'order'=> 'User.xp DESC'));

		$nCpt = 0;
		$aUsers = array();
		
		foreach ($aLeaderboard as $aUserTab) {
			$nEcartRank = -1*($aUserTab['User']['actual_rank'] - $aUserTab['User']['last_rank']); 
			
			if(!$aUserTab['User']['actual_rank'] && !$aUserTab['User']['last_rank']){
				$this->User->updateAll(
				    array('User.last_rank' => (int)$nCpt+1, 'User.actual_rank' => (int)$nCpt+1),
				    array('User.id =' => (int)$aUserTab['User']['id'])
				);
				$nEcartRank = 0;
			}
			elseif($aUserTab['User']['actual_rank'] != $nCpt+1){
				$this->User->updateAll(
				    array('User.last_rank' => (int)$aUserTab['User']['actual_rank'], 'User.actual_rank' => (int)$nCpt+1),
				    array('User.id =' => (int)$aUserTab['User']['id'])
				);
				$nEcartRank = -1*((int)$nCpt+1 - (int)$aUserTab['User']['actual_rank']);
			}
			
			$aUsers[$nCpt]['ecart'] = $nEcartRank;
			$aUsers[$nCpt]['actual_rank'] = $nCpt+1;
			$aUsers[$nCpt]['xp'] = $aUserTab['User']['xp'];
			$aUsers[$nCpt]['username'] = $aUserTab['User']['username'];
			$aUsers[$nCpt]['id'] = $aUserTab['User']['id'];
			$nCpt++;
		}


		$this->set('users',$aUsers);
		$this->render();
	}

	public function sortleaderboard(){
		$aLeaderboard = array();

		if ($this->request->is('post')){

			$sOrder = ($this->request->data['t'] == 'xp_rank') ? "User.xp ".$this->request->data['s'] : "User.username ".$this->request->data['s'];

			$aLeaderboard = $this->User->find('all', array('conditions' => array('User.xp >' => '0'), 'order'=> $sOrder));
			
			$nCpt = 0;
			$aUsers = array();
			foreach ($aLeaderboard as $aUserTab) {
				$aUsers[$nCpt]['ecart'] = -1*($aUserTab['User']['actual_rank'] - $aUserTab['User']['last_rank']);
				$aUsers[$nCpt]['actual_rank'] = $aUserTab['User']['actual_rank'];
				$aUsers[$nCpt]['xp'] = $aUserTab['User']['xp'];
				$aUsers[$nCpt]['username'] = $aUserTab['User']['username'];
				$aUsers[$nCpt]['id'] = $aUserTab['User']['id'];
				$nCpt++;
			}


			$this->set('users',$aUsers);
			$this->layout = false;
			$this->render();
		}
	}

	// public function beforeFilter() {
	//     parent::beforeFilter();
	//     $this->Auth->allow('initDB'); // Nous pouvons supprimer cette ligne après avoir fini
	// }

	// public function initDB() {
	//     $group = $this->User->Group;
	//     //Allow admins to everything
	//     $group->id = 1;
	//     $this->Acl->allow($group, 'controllers');

	//     echo "tout est ok";
	//     exit;
	// }
}
