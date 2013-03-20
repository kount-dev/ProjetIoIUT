<?php
App::uses('AppModel', 'Model');
/**
 * QuestionsDiscipline Model
 *
 * @property Question $Question
 * @property Discipline $Discipline
 */
class QuestionsDiscipline extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'question_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'discipline_id' => array(
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
		'Question' => array(
			'className' => 'Question',
			'foreignKey' => 'question_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Discipline' => array(
			'className' => 'Discipline',
			'foreignKey' => 'discipline_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
