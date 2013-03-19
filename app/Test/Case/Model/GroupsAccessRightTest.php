<?php
App::uses('GroupsAccessRight', 'Model');

/**
 * GroupsAccessRight Test Case
 *
 */
class GroupsAccessRightTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.groups_access_right',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GroupsAccessRight = ClassRegistry::init('GroupsAccessRight');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GroupsAccessRight);

		parent::tearDown();
	}

}
