<?php
App::uses('AppController', 'Controller');
/**
 * Journeys Controller
 *
 * @property Journey $Journey
 */
class JourneysController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Journey->recursive = 0;
		$this->set('journeys', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Journey->id = $id;
		if (!$this->Journey->exists()) {
			throw new NotFoundException(__('Invalid journey'));
		}
		$this->set('journey', $this->Journey->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
	        $this->request->data['Journey']['tourist_id'] = $this->Auth->user('id'); //Ligne ajoutée
			if ($this->Journey->save($this->request->data)) {
				$this->Session->setFlash(__('The journey has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The journey could not be saved. Please, try again.'));
			}
		}
		$tourists = $this->Journey->Tourist->find('list');
		$guides = $this->Journey->Guide->find('list');
		$zones = $this->Journey->Zone->find('list');
		$tourists = $this->Journey->Tourist->find('list');
		$this->set(compact('tourists', 'guides', 'zones', 'tourists'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Journey->id = $id;
		
		if (!$this->Journey->exists()) {
			throw new NotFoundException(__('Invalid journey'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Journey->save($this->request->data)) {
				$this->Session->setFlash(__('The journey has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The journey could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Journey->read(null, $id);
		}
	//	$tourists = $this->Journey->Tourist->find('list');
		$guides = $this->Journey->Guide->find('list');
		$zones = $this->Journey->Zone->find('list');
		$tourists = $this->Journey->Tourist->find('list');
		$this->set(compact('tourists', 'guides', 'zones', 'tourists'));
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
		$this->Journey->id = $id;
		if (!$this->Journey->exists()) {
			throw new NotFoundException(__('Invalid journey'));
		}
		if ($this->Journey->delete()) {
			$this->Session->setFlash(__('Journey deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Journey was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Journey->recursive = 0;
		$this->set('journeys', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Journey->id = $id;
		if (!$this->Journey->exists()) {
			throw new NotFoundException(__('Invalid journey'));
		}
		$this->set('journey', $this->Journey->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Journey->create();
			if ($this->Journey->save($this->request->data)) {
				$this->Session->setFlash(__('The journey has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The journey could not be saved. Please, try again.'));
			}
		}
		$tourists = $this->Journey->Tourist->find('list');
		$guides = $this->Journey->Guide->find('list');
		$zones = $this->Journey->Zone->find('list');
		$tourists = $this->Journey->Tourist->find('list');
		$this->set(compact('tourists', 'guides', 'zones', 'tourists'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Journey->id = $id;
		if (!$this->Journey->exists()) {
			throw new NotFoundException(__('Invalid journey'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Journey->save($this->request->data)) {
				$this->Session->setFlash(__('The journey has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The journey could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Journey->read(null, $id);
		}
		$tourists = $this->Journey->Tourist->find('list');
		$guides = $this->Journey->Guide->find('list');
		$zones = $this->Journey->Zone->find('list');
		$tourists = $this->Journey->Tourist->find('list');
		$this->set(compact('tourists', 'guides', 'zones', 'tourists'));
	}

/**
 * admin_delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Journey->id = $id;
		if (!$this->Journey->exists()) {
			throw new NotFoundException(__('Invalid journey'));
		}
		if ($this->Journey->delete()) {
			$this->Session->setFlash(__('Journey deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Journey was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
	public function isAuthorized($user) {
	    // Tous les users inscrits peuvent ajouter les posts
	    if ($this->action === 'add') {
	        return true;
	    }
			
	    // Le propriétaire du post peut l'éditer et le supprimer
	    if (in_array($this->action, array('edit', 'delete'))) {
			$journeyId = $this->request->params['pass'][0];      

	       if ($this->Journey->isOwnedByTourist($journeyId, $user['Tourist']['id'])) {
				return true;
	        }else{
				return false;
		        
			}
			
	    }

	    return parent::isAuthorized($user);
	}
}
