<?php
App::uses('AppModel', 'Model');
/**
 * JourneysTourist Model
 *
 * @property Tourist $Tourist
 * @property Journey $Journey
 */
class JourneysTourist extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Tourist' => array(
			'className' => 'Tourist',
			'foreignKey' => 'tourist_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Journey' => array(
			'className' => 'Journey',
			'foreignKey' => 'journey_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
