<?php
/**
 * QuestionFixture
 *
 */
class QuestionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'namefile' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'author' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'nombre_points' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'difficultee' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'type_question' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'namefile' => 'Lorem ipsum dolor sit amet',
			'author' => 'Lorem ipsum dolor sit amet',
			'nombre_points' => 1,
			'difficultee' => 1,
			'type_question' => 'Lorem ipsum dolor sit amet',
			'discipline_id' => 1,
			'created' => '2013-03-20 13:14:40',
			'modified' => '2013-03-20 13:14:40'
		),
	);

}
