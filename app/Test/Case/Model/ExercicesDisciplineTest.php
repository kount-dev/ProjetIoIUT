<?php
App::uses('ExercicesDiscipline', 'Model');

/**
 * ExercicesDiscipline Test Case
 *
 */
class ExercicesDisciplineTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.exercices_discipline',
		'app.exercise',
		'app.discipline',
		'app.user',
		'app.group',
		'app.group_list',
		'app.iut_group',
		'app.resultat',
		'app.exercices_question',
		'app.question'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ExercicesDiscipline = ClassRegistry::init('ExercicesDiscipline');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ExercicesDiscipline);

		parent::tearDown();
	}

}
