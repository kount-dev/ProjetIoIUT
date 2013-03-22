<?php
App::uses('ExercisesQuestion', 'Model');

/**
 * ExercisesQuestion Test Case
 *
 */
class ExercisesQuestionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.exercises_question',
		'app.exercise',
		'app.discipline',
		'app.user',
		'app.group',
		'app.group_list',
		'app.iut_group',
		'app.resultat',
		'app.exercices_discipline',
		'app.exercices_question',
		'app.question',
		'app.question_type',
		'app.questions_discipline'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ExercisesQuestion = ClassRegistry::init('ExercisesQuestion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ExercisesQuestion);

		parent::tearDown();
	}

}
