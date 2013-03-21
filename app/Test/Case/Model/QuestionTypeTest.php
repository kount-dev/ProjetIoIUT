<?php
App::uses('QuestionType', 'Model');

/**
 * QuestionType Test Case
 *
 */
class QuestionTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.question_type',
		'app.question',
		'app.user',
		'app.group',
		'app.exercise',
		'app.discipline',
		'app.exercices_discipline',
		'app.exercices_question',
		'app.resultat',
		'app.group_list',
		'app.iut_group',
		'app.questions_discipline'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QuestionType = ClassRegistry::init('QuestionType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QuestionType);

		parent::tearDown();
	}

}
