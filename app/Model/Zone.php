<?php
App::uses('AppModel', 'Model');
/**
 * Zone Model
 *
 * @property Journey $Journey
 */
class Zone extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Journey' => array(
			'className' => 'Journey',
			'foreignKey' => 'journey_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Journey' => array(
			'className' => 'Journey',
			'foreignKey' => 'zone_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	
	
	);

}
