<?php
App::uses('AppController', 'Controller');
/**
 * Tourists Controller
 *
 * @property Tourist $Tourist
 */
class TouristsController extends AppController {

      	public $theme = "Bootstrap";

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Tourist->recursive = 0;
		$this->set('tourists', $this->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Tourist->id = $id;
		if (!$this->Tourist->exists()) {
			throw new NotFoundException(__('Invalid tourist'));
		}
		$this->set('tourist', $this->Tourist->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tourist->create();
			if ($this->Tourist->save($this->request->data)) {
				$this->Session->setFlash(__('The tourist has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tourist could not be saved. Please, try again.'));
			}
		}
		$users = $this->Tourist->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
//		$this->helpers[] = 'Media.Uploader';
		$this->Tourist->id = $id;
		if (!$this->Tourist->exists()) {
			throw new NotFoundException(__('Invalid tourist'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Tourist->save($this->request->data)) {
				$this->Session->setFlash(__('The tourist has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tourist could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Tourist->read(null, $id);
		}
		$users = $this->Tourist->User->find('list');
		$this->set(compact('users'));
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
		$this->Tourist->id = $id;
		if (!$this->Tourist->exists()) {
			throw new NotFoundException(__('Invalid tourist'));
		}
		if ($this->Tourist->delete()) {
			$this->Session->setFlash(__('Tourist deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tourist was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Tourist->recursive = 0;
		$this->set('tourists', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Tourist->id = $id;
		if (!$this->Tourist->exists()) {
			throw new NotFoundException(__('Invalid tourist'));
		}
		$this->set('tourist', $this->Tourist->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Tourist->create();
			if ($this->Tourist->save($this->request->data)) {
				$this->Session->setFlash(__('The tourist has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tourist could not be saved. Please, try again.'));
			}
		}
		$users = $this->Tourist->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Tourist->id = $id;
		if (!$this->Tourist->exists()) {
			throw new NotFoundException(__('Invalid tourist'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Tourist->save($this->request->data)) {
				$this->Session->setFlash(__('The tourist has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tourist could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Tourist->read(null, $id);
		}
		$users = $this->Tourist->User->find('list');
		$this->set(compact('users'));
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
		$this->Tourist->id = $id;
		if (!$this->Tourist->exists()) {
			throw new NotFoundException(__('Invalid tourist'));
		}
		if ($this->Tourist->delete()) {
			$this->Session->setFlash(__('Tourist deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tourist was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * index method
 *
 * @return void
 */
	public function find($keyword = null) {
		if($this->params->query){
      		    debug($this->params->query['keyword']);
      		    //echo $this->Tourist->find;
            		$keyword=$this->params->query['keyword'];
      		//On va chercher les touristes
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
      		//on envoit � la vue (view)
      		$this->set('tourists_list', $tourists);
		}
		else{
      		$this->set('tourists_list', '');
		}
	}
}