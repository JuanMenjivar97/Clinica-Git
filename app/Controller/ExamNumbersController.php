<?php
App::uses('AppController', 'Controller');
/**
 * ExamNumbers Controller
 *
 * @property ExamNumber $ExamNumber
 * @property PaginatorComponent $Paginator
 */
class ExamNumbersController extends AppController {

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
		$this->ExamNumber->recursive = 0;
		$this->set('examNumbers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ExamNumber->exists($id)) {
			throw new NotFoundException(__('Invalid exam number'));
		}
		$options = array('conditions' => array('ExamNumber.' . $this->ExamNumber->primaryKey => $id));
		$this->set('examNumber', $this->ExamNumber->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ExamNumber->create();
			if ($this->ExamNumber->save($this->request->data)) {
				$this->Session->setFlash(__('The exam number has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The exam number could not be saved. Please, try again.'));
			}
		}
		$patients = $this->ExamNumber->Patient->find('list');
		$this->set(compact('patients'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ExamNumber->exists($id)) {
			throw new NotFoundException(__('Invalid exam number'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ExamNumber->save($this->request->data)) {
				$this->Session->setFlash(__('The exam number has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The exam number could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ExamNumber.' . $this->ExamNumber->primaryKey => $id));
			$this->request->data = $this->ExamNumber->find('first', $options);
		}
		$patients = $this->ExamNumber->Patient->find('list');
		$this->set(compact('patients'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ExamNumber->id = $id;
		if (!$this->ExamNumber->exists()) {
			throw new NotFoundException(__('Invalid exam number'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ExamNumber->delete()) {
			$this->Session->setFlash(__('The exam number has been deleted.'));
		} else {
			$this->Session->setFlash(__('The exam number could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
