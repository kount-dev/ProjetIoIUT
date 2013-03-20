<?php
App::uses('AppModel', 'Model');
/**
 * ExercicesDiscipline Model
 *
 * @property Exercise $Exercise
 * @property Discipline $Discipline
 */
class ExercicesDiscipline extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'exercise_id' => array(
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
		'Exercise' => array(
			'className' => 'Exercise',
			'foreignKey' => 'exercise_id',
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
