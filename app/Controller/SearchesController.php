<?php
App::uses('AppController', 'Controller');
/**
 * Searches Controller
 *
 */
class SearchesController extends AppController {

      public $name = 'Searches';
	public $theme = "Bootstrap";
	public $components = array('Search.Prg');
      public $presetVars = array(
          array('field' => 'username', 'type' => 'value'),
          array('field' => 'pr_status', 'type' => 'value'),
      );
	

/**
 * index method
 *
 * @return void
 */
      public function index() {
            $this->Prg->commonProcess();
            $this->paginate = array(
            'conditions' => $this->Search->parseCriteria($this->passedArgs));
            $this->set('searches', $this->paginate());
      }
		
	/*function resultSearch(){
	     echo '<pre>';
	     var_dump($_POST);
	     echo '</pre>';
		$search = $this->request->data['Post']['search'];

		$d['posts'] = $this->Search->find('all', array(
			'conditions' => array("OR"=>array('Search.username LIKE'=>'%'.$search.'%'))));
			
			//$d = $this->User->find('all');
			//var_dump($d);
		$this->set($d);
		$this->render('index');
		debug($d);
	}*/
}
