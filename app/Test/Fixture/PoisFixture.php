<?php
/**
 * PoisFixture
 *
 */
class PoisFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'track_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'lat' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 200),
		'lng' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 200),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'track_id' => 1,
			'created' => '2013-01-30 11:15:47',
			'modified' => '2013-01-30 11:15:47',
			'name' => 'Lorem ipsum dolor sit amet',
			'lat' => 1,
			'lng' => 1
		),
	);

}
