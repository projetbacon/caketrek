<?php
App::uses('AppController', 'Controller');
/**
 * Messages Controller
 *
 * @property Message $Message
 */
class MessagesController extends AppController {

public function usermessages($id) {
		$connectedid = 1;
		// je suis l4utilisqteur 1

		$this->Message->recursive = 0;
		//$this->set('messages', $this->paginate(array('Message.user_id'=>$id,array(
			//'conditions' => array('Message.user_receiver_id'=> $connectedid)))));



// OR AND CONDITION VARIABLE 
		$orcondition = $this->Message->find('all',array(
			'conditions' => array('OR' => array(
				array('AND' => array(
							array('Message.user_id'=> $id),
							array('Message.user_receiver_id'=> $connectedid)
							)
					),
				array('AND' => array(
							array('Message.user_id'=> $connectedid),
							array('Message.user_receiver_id'=> $id)
							)
						)
					)),
			'order' => array('Message.created DESC')
			) );

		$this->set('messages', $orcondition); 

		
		//debug($orcondition);
		//$this->render("index");
	}

/**
 * inbox method
 *
 * @return void
 */
	public function inbox() {
		$connectedid = 1;
		// je suis l4utilisqteur 1



		$this->Message->recursive = 0;
/*
		$data = $this->Message->find('all');
		$this->set('messages', $data); */

		$data = $this->Message->find('all',array(
			'conditions' => array('OR' => array(
					array('Message.user_receiver_id'=> $connectedid),
					array('Message.user_id'=> $connectedid)
					)),
			'group' => array('Message.user_id','Message.user_receiver_id'),
			'order' => array('Message.created DESC')

			) );



		$this->set('messages', $data);
		/* $d['message'] = current($this->Message->find('all'));
		$this -> set($d); */
	}
	
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Message->recursive = 0;
		$this->set('messages', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Message->id = $id;
		if (!$this->Message->exists()) {
			throw new NotFoundException(__('Invalid message'));
		}
		$this->set('message', $this->Message->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Message->create();
			if ($this->Message->save($this->request->data)) {
				$this->Session->setFlash(__('The message has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The message could not be saved. Please, try again.'));
			}
		}
		$users = $this->Message->User->find('list');
		$userReceivers = $this->Message->UserReceiver->find('list');
		$this->set(compact('users', 'userReceivers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Message->id = $id;
		if (!$this->Message->exists()) {
			throw new NotFoundException(__('Invalid message'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Message->save($this->request->data)) {
				$this->Session->setFlash(__('The message has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The message could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Message->read(null, $id);
		}
		$users = $this->Message->User->find('list');
		$userReceivers = $this->Message->UserReceiver->find('list');
		$this->set(compact('users', 'userReceivers'));
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
		$this->Message->id = $id;
		if (!$this->Message->exists()) {
			throw new NotFoundException(__('Invalid message'));
		}
		if ($this->Message->delete()) {
			$this->Session->setFlash(__('Message deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Message was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Message->recursive = 0;
		$this->set('messages', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Message->id = $id;
		if (!$this->Message->exists()) {
			throw new NotFoundException(__('Invalid message'));
		}
		$this->set('message', $this->Message->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Message->create();
			if ($this->Message->save($this->request->data)) {
				$this->Session->setFlash(__('The message has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The message could not be saved. Please, try again.'));
			}
		}
		$users = $this->Message->User->find('list');
		$userReceivers = $this->Message->UserReceiver->find('list');
		$this->set(compact('users', 'userReceivers'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Message->id = $id;
		if (!$this->Message->exists()) {
			throw new NotFoundException(__('Invalid message'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Message->save($this->request->data)) {
				$this->Session->setFlash(__('The message has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The message could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Message->read(null, $id);
		}
		$users = $this->Message->User->find('list');
		$userReceivers = $this->Message->UserReceiver->find('list');
		$this->set(compact('users', 'userReceivers'));
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
		$this->Message->id = $id;
		if (!$this->Message->exists()) {
			throw new NotFoundException(__('Invalid message'));
		}
		if ($this->Message->delete()) {
			$this->Session->setFlash(__('Message deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Message was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
