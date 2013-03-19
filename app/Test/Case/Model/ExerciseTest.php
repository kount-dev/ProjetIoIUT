<?php
App::uses('Exercise', 'Model');

/**
 * Exercise Test Case
 *
 */
class ExerciseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.exercise',
		'app.discipline',
		'app.user',
		'app.groups_access_right',
		'app.group_list',
		'app.group',
		'app.resultat'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Exercise = ClassRegistry::init('Exercise');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Exercise);

		parent::tearDown();
	}

}
