<?php
App::uses('PoisController', 'Controller');

/**
 * PoisController Test Case
 *
 */
class PoisControllerTest extends ControllerTestCase {

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

}
