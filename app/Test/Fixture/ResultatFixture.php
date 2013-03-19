<?php
/**
 * ResultatFixture
 *
 */
class ResultatFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'exercise_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'numero_tentative' => array('type' => 'integer', 'null' => false, 'default' => null),
		'date_envoie' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'taux_reussite' => array('type' => 'float', 'null' => true, 'default' => null),
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
			'name' => 'Lorem ipsum dolor sit amet',
			'user_id' => 1,
			'exercise_id' => 1,
			'numero_tentative' => 1,
			'date_envoie' => '2013-03-18 15:06:34',
			'taux_reussite' => 1,
			'created' => '2013-03-18 15:06:34',
			'modified' => '2013-03-18 15:06:34'
		),
	);

}
