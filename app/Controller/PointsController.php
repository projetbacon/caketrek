<?php
App::uses('AppController', 'Controller');
/**
 * Points Controller
 *
 * @property Point $Point
 */
class PointsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Point->recursive = 0;
		$this->set('points', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Point->id = $id;
		if (!$this->Point->exists()) {
			throw new NotFoundException(__('Invalid point'));
		}
		$this->set('point', $this->Point->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id_track=null) {
		$this->loadModel('Track');
		$this->request->data['Point']['track_id']=$id_track;
		
		$this->Track->id = $id_track;
		if (!$this->Track->exists()) {
			throw new NotFoundException(__('Invalid track'));
		}
		$this->set('track', $this->Track->read(null, $id_track));
	
		//check track id is not null
		if ($this->request->is('post')) {
			$this->Point->create();
			if ($this->Point->save($this->request->data)) {
				$this->Session->setFlash(__('The point has been saved'));
				$this->redirect(array('action' => 'add', $id_track));
			} else {
				$this->Session->setFlash(__('The point could not be saved. Please, try again.'));
			}
		}
		$tracks = $this->Point->Track->find('list');
		$this->set(compact('tracks'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Point->id = $id;
		if (!$this->Point->exists()) {
			throw new NotFoundException(__('Invalid point'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Point->save($this->request->data)) {
				$this->Session->setFlash(__('The point has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The point could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Point->read(null, $id);
		}
		$tracks = $this->Point->Track->find('list');
		$this->set(compact('tracks'));
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
		$this->Point->id = $id;
		if (!$this->Point->exists()) {
			throw new NotFoundException(__('Invalid point'));
		}
		if ($this->Point->delete()) {
			$this->Session->setFlash(__('Point deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Point was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Point->recursive = 0;
		$this->set('points', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Point->id = $id;
		if (!$this->Point->exists()) {
			throw new NotFoundException(__('Invalid point'));
		}
		$this->set('point', $this->Point->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Point->create();
			if ($this->Point->save($this->request->data)) {
				$this->Session->setFlash(__('The point has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The point could not be saved. Please, try again.'));
			}
		}
		$tracks = $this->Point->Track->find('list');
		$this->set(compact('tracks'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Point->id = $id;
		if (!$this->Point->exists()) {
			throw new NotFoundException(__('Invalid point'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Point->save($this->request->data)) {
				$this->Session->setFlash(__('The point has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The point could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Point->read(null, $id);
		}
		$tracks = $this->Point->Track->find('list');
		$this->set(compact('tracks'));
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
		$this->Point->id = $id;
		if (!$this->Point->exists()) {
			throw new NotFoundException(__('Invalid point'));
		}
		if ($this->Point->delete()) {
			$this->Session->setFlash(__('Point deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Point was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
