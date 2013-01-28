<?php
App::uses('AppModel', 'Model');
/**
 * Journey Model
 *
 * @property Tourist $Tourist
 * @property Guide $Guide
 * @property Track $Track
 * @property Zone $Zone
 */
class Journey extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Tourist' => array(
			'className' => 'Tourist',
			'foreignKey' => 'tourist_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Guide' => array(
			'className' => 'Guide',
			'foreignKey' => 'guide_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Track' => array(
			'className' => 'Track',
			'foreignKey' => 'track_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Zone' => array(
			'className' => 'Zone',
			'foreignKey' => 'zone_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
