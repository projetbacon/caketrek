<?php
App::uses('AppModel', 'Model');
/**
 * Tourist Model
 *
 * @property User $User
 */
class Tourist extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

//	public $actAs = array('Containable','Media.Media');
	
/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
