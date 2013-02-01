<?php
App::uses('Pois', 'Model');

/**
 * Pois Test Case
 *
 */
class PoisTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pois',
		'app.track',
		'app.journey',
		'app.tourist',
		'app.user',
		'app.badge',
		'app.badges_user',
		'app.journeys_tourist',
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
		$this->Pois = ClassRegistry::init('Pois');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Pois);

		parent::tearDown();
	}

}
