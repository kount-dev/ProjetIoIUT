<?php
App::uses('GroupList', 'Model');

/**
 * GroupList Test Case
 *
 */
class GroupListTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.group_list',
		'app.user',
		'app.group'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GroupList = ClassRegistry::init('GroupList');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GroupList);

		parent::tearDown();
	}

}
