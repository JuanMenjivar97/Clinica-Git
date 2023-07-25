<?php
App::uses('AppController', 'Controller');
/**
 * Ipgs Controller
 *
 * @property Ipg $Ipg
 * @property PaginatorComponent $Paginator
 */
class IpgsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Ipg->recursive = 0;
		$this->set('ipgs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Ipg->exists($id)) {
			throw new NotFoundException(__('Invalid ipg'));
		}
		$options = array('conditions' => array('Ipg.' . $this->Ipg->primaryKey => $id));
		$this->set('ipg', $this->Ipg->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Ipg->create();
			if ($this->Ipg->save($this->request->data)) {
				$this->Session->setFlash(__('The ipg has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ipg could not be saved. Please, try again.'));
			}
		}
		$examNumbers = $this->Ipg->ExamNumber->find('list');
		$this->set(compact('examNumbers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Ipg->exists($id)) {
			throw new NotFoundException(__('Invalid ipg'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Ipg->save($this->request->data)) {
				$this->Session->setFlash(__('The ipg has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ipg could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Ipg.' . $this->Ipg->primaryKey => $id));
			$this->request->data = $this->Ipg->find('first', $options);
		}
		$examNumbers = $this->Ipg->ExamNumber->find('list');
		$this->set(compact('examNumbers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Ipg->id = $id;
		if (!$this->Ipg->exists()) {
			throw new NotFoundException(__('Invalid ipg'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Ipg->delete()) {
			$this->Session->setFlash(__('The ipg has been deleted.'));
		} else {
			$this->Session->setFlash(__('The ipg could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
