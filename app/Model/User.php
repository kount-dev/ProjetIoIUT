<?php
App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');

/**
* User Model
*
* @property Group $Group
* @property Exercise $Exercise
* @property GroupList $GroupList
* @property Answer $Answer
*/
class User extends AppModel {

    public $name = 'User';
    public $actsAs = array('Acl' => array('type' => 'requester'));


 /**
* Validation rules
*
* @var array
*/
public $validate = array(
  'username' => array(
    'notempty' => array(
      'rule' => array('notempty'),
      //'message' => 'Your custom message here',
      //'allowEmpty' => false,
      //'required' => false,
      //'last' => false, // Stop validation after this rule
      //'on' => 'create', // Limit validation to 'create' or 'update' operations
    ),
  ),
  'password' => array(
    'notempty' => array(
      'rule' => array('notempty'),
      //'message' => 'Your custom message here',
      //'allowEmpty' => false,
      //'required' => false,
      //'last' => false, // Stop validation after this rule
      //'on' => 'create', // Limit validation to 'create' or 'update' operations
    ),
  ),
  'mail' => array(
    'notempty' => array(
      'rule' => array('notempty'),
      //'message' => 'Your custom message here',
      //'allowEmpty' => false,
      //'required' => false,
      //'last' => false, // Stop validation after this rule
      //'on' => 'create', // Limit validation to 'create' or 'update' operations
    ),
  ),
  'group_id' => array(
    'numeric' => array(
      'rule' => array('numeric'),
      //'message' => 'Your custom message here',
      //'allowEmpty' => false,
      //'required' => false,
      //'last' => false, // Stop validation after this rule
      //'on' => 'create', // Limit validation to 'create' or 'update' operations
    ),
  ),
);
  //The Associations below have been created with all possible keys, those that are not needed can be removed
 
/**
* belongsTo associations
*
* @var array
*/
public $belongsTo = array(
  'Group' => array(
    'className' => 'Group',
    'foreignKey' => 'group_id',
    'conditions' => '',
    'fields' => '',
    'order' => ''
  )
);
 
/**
* hasMany associations
*
* @var array
*/
public $hasMany = array(
  'Exercise' => array(
    'className' => 'Exercise',
    'foreignKey' => 'user_id',
    'dependent' => false,
    'conditions' => '',
    'fields' => '',
    'order' => '',
    'limit' => '',
    'offset' => '',
    'exclusive' => '',
    'finderQuery' => '',
    'counterQuery' => ''
  ),
  'GroupList' => array(
    'className' => 'GroupList',
    'foreignKey' => 'user_id',
    'dependent' => false,
    'conditions' => '',
    'fields' => '',
    'order' => '',
    'limit' => '',
    'offset' => '',
    'exclusive' => '',
    'finderQuery' => '',
    'counterQuery' => ''
  ),
  'Answer' => array(
    'className' => 'Answer',
    'foreignKey' => 'user_id',
    'dependent' => false,
    'conditions' => '',
    'fields' => '',
    'order' => '',
    'limit' => '',
    'offset' => '',
    'exclusive' => '',
    'finderQuery' => '',
    'counterQuery' => ''
  )
);
 
 /**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
  public $hasAndBelongsToMany = array(
    'IutGroup' => array(
      'className' => 'IutGroup',
      'joinTable' => 'group_lists',
      'foreignKey' => 'user_id',
      'associationForeignKey' => 'iut_group_id',
      'unique' => 'keepExisting',
      'conditions' => '',
      'fields' => '',
      'order' => '',
      'limit' => '',
      'offset' => '',
      'finderQuery' => '',
      'deleteQuery' => '',
      'insertQuery' => ''
    )
  );

    public function parentNode() {
       if (!$this->id && empty($this->data)) {
           return null;
       }
       if (isset($this->data['User']['group_id'])) {
           $groupId = $this->data['User']['group_id'];
       } else {
           $groupId = $this->field('group_id');
       }
       if (!$groupId) {
           return null;
       } else {
           return array('Group' => array('id' => $groupId));
       }
    }

    public function beforeSave($option = array()) {
       $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
       return true;
    }

    public function bindNode($user) {
        return array('model' => 'Group', 'foreign_key' => $user['User']['group_id']);
    }

}