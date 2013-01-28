<?php
App::uses('Track', 'Model');

/**
 * Track Test Case
 *
 */
class TrackTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.track',
		'app.journey',
		'app.tourist',
		'app.user',
		'app.badge',
		'app.badges_user',
		'app.guide',
		'app.zone'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Track = ClassRegistry::init('Track');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Track);

		parent::tearDown();
	}

}
