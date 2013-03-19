<?php
App::uses('Resultat', 'Model');

/**
 * Resultat Test Case
 *
 */
class ResultatTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.resultat',
		'app.user',
		'app.exercise'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Resultat = ClassRegistry::init('Resultat');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Resultat);

		parent::tearDown();
	}

}
