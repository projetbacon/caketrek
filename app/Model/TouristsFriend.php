<?php
App::uses('AppModel', 'Model');
/**
 * TouristsFriend Model
 *
 * @property TouristSend $TouristSend
 * @property TouristReceive $TouristReceive
 */
class TouristsFriend extends AppModel {

/**
 * Display field
 *
 * @var string
 */

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
	  'TouristSender' => array(
	    'className' => 'Tourist',
	    'joinTable' => 'tourists',
	    'foreignKey' => 'tourist_id',
	    'associationForeignKey' => 'id'
	  ),
	  'TouristReceiver' => array(
	    'className' => 'Tourist',
	    'joinTable' => 'tourists',
	    'foreignKey' => 'tourist_receive_id',
	    'associationForeignKey' => 'id'
	  )
	);
}
