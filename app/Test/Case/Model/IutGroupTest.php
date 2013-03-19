<?php
App::uses('IutGroup', 'Model');

/**
 * IutGroup Test Case
 *
 */
class IutGroupTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.iut_group',
		'app.group_list',
		'app.user',
		'app.groups_access_right',
		'app.exercise',
		'app.discipline',
		'app.resultat'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->IutGroup = ClassRegistry::init('IutGroup');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->IutGroup);

		parent::tearDown();
	}

}
