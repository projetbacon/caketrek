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
                        //supprime les mots de deux caractères ou moins (à partir de deux caractères dans la recherche)
                        if(strlen($keyword) > 2){
                              $keyword = preg_replace('#(?<=\W)\w{1,3}(?=\W)#', '', $keyword);
                        }

                        //search in tourists
                        $this->loadModel('Tourist');
                        $tourists = $this->Tourist->find('all',  array(
                              'conditions' => array(
                                    "OR"=>array(
                                          'Tourist.first_name LIKE'=>'%'.$keyword.'%',
                                          'Tourist.last_name LIKE'=>'%'.$keyword.'%',
                                          'User.username LIKE'=>'%'.$keyword.'%'
                                    )//OR
                              ),//conditions
                              'recursive' => 1,
                              'fields' => array('id','first_name','last_name','is_guide'),
                              'contain' => array('User' => array(
                                    'fields' => array('id','username')
                              ))//contain
                        ));
                        
                        $this->set('tourists_list', $tourists);
                        
                        //debug($tourists);
                        
                        //search in journeys
                        $this->loadModel('Journey');
                        $journeys = $this->Journey->find('all',  array(
                              'conditions' => array(
                                    "OR"=>array(
                                          'Journey.name LIKE'=>'%'.$keyword.'%',
                                          'Journey.about LIKE'=>'%'.$keyword.'%',
                                          'Journey.body LIKE'=>'%'.$keyword.'%',
                                    ),//OR
                                    "AND"=>array(
                                          'Journey.public ='=>'1',
                                    )//AND
                              ),//conditions
                              'recursive' => 1,
                              'fields' => array('id','name')

                        ));
                        
                        $this->set('journeys_list', $journeys);
                        //debug($journeys);
                        
                        $this->loadModel('Track');
                        $tracks = $this->Track->find('all',  array(
                              'conditions' => array(
                                    'Track.name LIKE'=>'%'.$keyword.'%'
                              ),//conditions
                              'recursive' => 1,
                              'fields' => array('id','name')
                        ));
                        
                        $this->set('tracks_list', $tracks);
                        //debug($tracks);
            }
            
      }
}