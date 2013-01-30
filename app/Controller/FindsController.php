<?php
App::uses('AppController', 'Controller');
/**
 * Finds Controller
 *
 */
class FindsController extends AppController {

      public $name = 'Finds';
	public $theme = "Bootstrap";

/**
 * index method
 *
 * @return void
 */
      public function index() {
           if($this->params->query){
                 $keyword=$this->params->query['keyword'];
      
                 //search in tourists
                 $this->loadModel('Tourist');
                 $tourists = $this->Tourist->find('all',  array(
                  		'conditions' => array(
                  		    "OR"=>array(
                              		'Tourist.first_name LIKE'=>'%'.$keyword.'%',
                              		'Tourist.last_name LIKE'=>'%'.$keyword.'%',
                              		//'User.username LIKE'=>'%'.$keyword.'%'
                              		)//OR
                        		),//conditions
                        		'recursive' => 1,
                        		'fields' => array('first_name','last_name'),
                        		'contain' => array('User' => array(
                        		          'fields' => array('username')
                        		))//contain
                        	));
                        	
          		$this->set('tourists_list', $tourists);
          		
          		debug($tourists);
                        	
                  //search in journeys
                  $this->loadModel('Journey');
                  $journeys = $this->Journey->find('all',  array(
            		'conditions' => array(
            		    "OR"=>array(
                        		'Journey.name LIKE'=>'%'.$keyword.'%',
                        		'Journey.about LIKE'=>'%'.$keyword.'%',
                        		'Journey.body LIKE'=>'%'.$keyword.'%',
                        	)//OR
                        ),//conditions
            		'recursive' => 1,
            		'fields' => array('name')
            	));
            	
            	$this->set('journeys_list', $journeys);
          		debug($journeys);
            }
      }
}