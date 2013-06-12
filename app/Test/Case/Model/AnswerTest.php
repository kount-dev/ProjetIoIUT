<?php
App::uses('Answer', 'Model');

/**
 * Answer Test Case
 *
 */
class AnswerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.answer',
		'app.user',
		'app.group',
		'app.exercise',
		'app.resultat',
		'app.discipline',
		'app.exercises_discipline',
		'app.question',
		'app.question_type',
		'app.exercises_question',
		'app.questions_discipline',
		'app.group_list',
		'app.iut_group'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Answer = ClassRegistry::init('Answer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Answer);

		parent::tearDown();
	}

}
