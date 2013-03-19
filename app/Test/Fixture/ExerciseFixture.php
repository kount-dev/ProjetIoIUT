<?php
/**
 * ExerciseFixture
 *
 */
class ExerciseFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'date_ouverture' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'date_fermeture' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'chemin_fichier_xml' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'discipline_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'name' => array('column' => 'name', 'unique' => 1)
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
			'date_ouverture' => '2013-03-18 15:08:52',
			'date_fermeture' => '2013-03-18 15:08:52',
			'chemin_fichier_xml' => 'Lorem ipsum dolor sit amet',
			'discipline_id' => 1,
			'user_id' => 1,
			'created' => '2013-03-18 15:08:52',
			'modified' => '2013-03-18 15:08:52'
		),
	);

}
