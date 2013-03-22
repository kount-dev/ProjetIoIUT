<?php
/**
 * ExercisesDisciplineFixture
 *
 */
class ExercisesDisciplineFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'exercise_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'discipline_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'exercise_id' => 1,
			'discipline_id' => 1,
			'created' => '2013-03-22 15:18:26',
			'modified' => '2013-03-22 15:18:26'
		),
	);

}
