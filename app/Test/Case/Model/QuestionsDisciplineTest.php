<?php
App::uses('QuestionsDiscipline', 'Model');

/**
 * QuestionsDiscipline Test Case
 *
 */
class QuestionsDisciplineTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.questions_discipline',
		'app.question',
		'app.discipline',
		'app.exercise',
		'app.user',
		'app.group',
		'app.group_list',
		'app.iut_group',
		'app.resultat',
		'app.exercices_question'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QuestionsDiscipline = ClassRegistry::init('QuestionsDiscipline');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QuestionsDiscipline);

		parent::tearDown();
	}

}
