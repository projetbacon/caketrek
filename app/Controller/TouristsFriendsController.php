<?php
App::uses('AppController', 'Controller');
/**
 * TouristsFriends Controller
 *
 * @property TouristsFriend $TouristsFriend
 */
class TouristsFriendsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TouristsFriend->recursive = 0;
		$tf = $this->TouristsFriend->find('all');
		$this->set('touristsFriends', $tf);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		
		$this->TouristsFriend->id = $id;
		if (!$this->TouristsFriend->exists()) {
			throw new NotFoundException(__('Invalid tourists friend'));
		}
		$this->set('touristsFriend', $this->TouristsFriend->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TouristsFriend->create();
			if ($this->TouristsFriend->save($this->request->data)) {
				$this->Session->setFlash(__('The tourists friend has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tourists friend could not be saved. Please, try again.'));
			}
		}
		$tourists = $this->TouristsFriend->TouristSender->find('list');
		$touristReceives = $this->TouristsFriend->TouristReceiver->find('list');
		$this->set(compact('tourist', 'touristReceives'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->TouristsFriend->id = $id;
		if (!$this->TouristsFriend->exists()) {
			throw new NotFoundException(__('Invalid tourists friend'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TouristsFriend->save($this->request->data)) {
				$this->Session->setFlash(__('The tourists friend has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tourists friend could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->TouristsFriend->read(null, $id);
		}
		$tourist = $this->TouristsFriend->TouristSend->find('list');
		$touristReceives = $this->TouristsFriend->TouristReceive->find('list');
		$this->set(compact('touristSends', 'touristReceives'));
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
		$this->TouristsFriend->id = $id;
		if (!$this->TouristsFriend->exists()) {
			throw new NotFoundException(__('Invalid tourists friend'));
		}
		if ($this->TouristsFriend->delete()) {
			$this->Session->setFlash(__('Tourists friend deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tourists friend was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
