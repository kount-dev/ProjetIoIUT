<?php
App::uses('ExercicesQuestion', 'Model');

/**
 * ExercicesQuestion Test Case
 *
 */
class ExercicesQuestionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.exercices_question',
		'app.exercise',
		'app.discipline',
		'app.user',
		'app.groups_access_right',
		'app.group_list',
		'app.group',
		'app.resultat',
		'app.question'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ExercicesQuestion = ClassRegistry::init('ExercicesQuestion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ExercicesQuestion);

		parent::tearDown();
	}

}
