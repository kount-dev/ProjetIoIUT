<?php
/**
 * AnswerFixture
 *
 */
class AnswerFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'namefile' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'exercise_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'attempt_number' => array('type' => 'integer', 'null' => false, 'default' => null),
		'success_rate' => array('type' => 'float', 'null' => true, 'default' => null),
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
			'namefile' => 'Lorem ipsum dolor sit amet',
			'user_id' => 1,
			'exercise_id' => 1,
			'attempt_number' => 1,
			'success_rate' => 1,
			'created' => '2013-04-04 11:20:09',
			'modified' => '2013-04-04 11:20:09'
		),
	);

}
