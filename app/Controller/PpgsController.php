<?php
App::uses('AppController', 'Controller');
/**
 * Ppgs Controller
 *
 * @property Ppg $Ppg
 * @property PaginatorComponent $Paginator
 */
class PpgsController extends AppController {

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
		$this->Ppg->recursive = 0;
		$this->set('ppgs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Ppg->exists($id)) {
			throw new NotFoundException(__('Invalid ppg'));
		}
		$options = array('conditions' => array('Ppg.' . $this->Ppg->primaryKey => $id));
		$this->set('ppg', $this->Ppg->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Ppg->create();
			if ($this->Ppg->save($this->request->data)) {
				$this->Session->setFlash(__('The ppg has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ppg could not be saved. Please, try again.'));
			}
		}
		$examNumbers = $this->Ppg->ExamNumber->find('list');
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
		if (!$this->Ppg->exists($id)) {
			throw new NotFoundException(__('Invalid ppg'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Ppg->save($this->request->data)) {
				$this->Session->setFlash(__('The ppg has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ppg could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Ppg.' . $this->Ppg->primaryKey => $id));
			$this->request->data = $this->Ppg->find('first', $options);
		}
		$examNumbers = $this->Ppg->ExamNumber->find('list');
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
		$this->Ppg->id = $id;
		if (!$this->Ppg->exists()) {
			throw new NotFoundException(__('Invalid ppg'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Ppg->delete()) {
			$this->Session->setFlash(__('The ppg has been deleted.'));
		} else {
			$this->Session->setFlash(__('The ppg could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
