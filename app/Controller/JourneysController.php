<?php
App::uses('AppController', 'Controller');
/**
 * Journeys Controller
 *
 */
class JourneysController extends AppController {


	public $theme = "Bootstrap";

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Journey->recursive = 0;
		$this->set('journeys', $this->paginate());
	}
}
