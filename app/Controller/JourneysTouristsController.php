<?php
App::uses('AppController', 'Controller');
/**
 * JourneysTourists Controller
 *
 * @property JourneysTourist $JourneysTourist
 */
class JourneysTouristsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->JourneysTourist->recursive = 0;
		$this->set('journeysTourists', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->JourneysTourist->id = $id;
		if (!$this->JourneysTourist->exists()) {
			throw new NotFoundException(__('Invalid journeys tourist'));
		}
		$this->set('journeysTourist', $this->JourneysTourist->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->JourneysTourist->create();
			if ($this->JourneysTourist->save($this->request->data)) {
				$this->Session->setFlash(__('The journeys tourist has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The journeys tourist could not be saved. Please, try again.'));
			}
		}
		$tourists = $this->JourneysTourist->Tourist->find('list');
		$journeys = $this->JourneysTourist->Journey->find('list');
		$this->set(compact('tourists', 'journeys'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->JourneysTourist->id = $id;
		if (!$this->JourneysTourist->exists()) {
			throw new NotFoundException(__('Invalid journeys tourist'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->JourneysTourist->save($this->request->data)) {
				$this->Session->setFlash(__('The journeys tourist has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The journeys tourist could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->JourneysTourist->read(null, $id);
		}
		$tourists = $this->JourneysTourist->Tourist->find('list');
		$journeys = $this->JourneysTourist->Journey->find('list');
		$this->set(compact('tourists', 'journeys'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->JourneysTourist->id = $id;
		if (!$this->JourneysTourist->exists()) {
			throw new NotFoundException(__('Invalid journeys tourist'));
		}
		if ($this->JourneysTourist->delete()) {
			$this->Session->setFlash(__('Journeys tourist deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Journeys tourist was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
