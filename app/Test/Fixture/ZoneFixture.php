<?php
/**
 * ZoneFixture
 *
 */
class ZoneFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'journey_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'track_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'journey_id' => 1,
			'track_id' => 1
		),
	);

}
