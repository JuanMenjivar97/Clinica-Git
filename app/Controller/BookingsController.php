<?php
App::uses('AppController', 'Controller');
/**
 * Bookings Controller
 *
 * @property Booking $Booking
 * @property PaginatorComponent $Paginator
 */
class BookingsController extends AppController {

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
		$this->Booking->recursive = 0;
		$this->set('bookings', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Booking->exists($id)) {
			throw new NotFoundException(__('Invalid booking'));
		}
		$options = array('conditions' => array('Booking.' . $this->Booking->primaryKey => $id));
		$this->set('booking', $this->Booking->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	// public function add() {
	// 	if ($this->request->is('post')) {
	// 		$this->Booking->create();
	// 		if ($this->Booking->save($this->request->data)) {
	// 			$this->Session->setFlash(__('The booking has been saved.'));
	// 			return $this->redirect(array('action' => 'index'));
	// 		} else {
	// 			$this->Session->setFlash(__('The booking could not be saved. Please, try again.'));
	// 		}
	// 	}
	// 	$users = $this->Booking->User->find('list');
	// 	$patients = $this->Booking->Patient->find('list');
	// 	$this->set(compact('users', 'patients'));
	// }

	public function add() {
		if ($this->request->is('post')) {
			$this->Booking->create();
			$initime = $this->request->data['Booking']['start_time'];
			$finishtime = $this->request->data['Booking']['finish_time'];
			$bookingdate = $this->request->data['Booking']['booking_date'];
			$datetoday=date('Y-m-d');
			
			if ($initime<'08:00:00'||$initime>'17:00:00') {
				$this->Session->setFlash(__('
					<script> Swal.fire({
					position: "top-center",
					icon: "info",
					title: "No se puede reservar a esa hora",
					showConfirmButton: false,
					timer: 1800}) 
				</script>'));
				return $this->redirect(array('action' => 'add'));
			}

			if ($finishtime>'17:00:00') {
				$this->Session->setFlash(__('
					<script> Swal.fire({
					position: "top-center",
					icon: "info",
					title: "No se puede reservar a esa hora",
					showConfirmButton: false,
					timer: 1800}) 
				</script>'));
				return $this->redirect(array('action' => 'add'));
			}

			if ($bookingdate< $datetoday) {
				$this->Session->setFlash(__('
					<script> Swal.fire({
					position: "top-center",
					icon: "info",
					title: "La fecha ingresada es incorrecta",
					showConfirmButton: false,
					timer: 1800}) 
				</script>'));
				return $this->redirect(array('action' => 'add'));
			}

			//LINEA DE INSERT EN LA BASE
			if ($this->Booking->save($this->request->data)) {
				$this->Session->setFlash(__('
					<script> Swal.fire({
					position: "top-center",
					icon: "success",
					title: "Se ha guardardo la reserva exitosamente",
					showConfirmButton: false,
					timer: 1800}) 
				</script>'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('<script> M.toast({html: "¡Advertencia!"}); M.toast({html: "La reserva no se ha podido guardar. Intente nuevamente"}); </script>'));
			}
		}
		$users = $this->Booking->User->find('list',array('fields'=>array('id','full_name_user')));
		$patients = $this->Booking->Patient->find('list',array('fields'=>array('id','full_name')));
		$this->set(compact('users','patients'));
		
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Booking->exists($id)) {
			throw new NotFoundException(__('Invalid booking'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Booking->save($this->request->data)) {
				$this->Session->setFlash(__('The booking has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The booking could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Booking.' . $this->Booking->primaryKey => $id));
			$this->request->data = $this->Booking->find('first', $options);
		}
		$users = $this->Booking->User->find('list');
		$patients = $this->Booking->Patient->find('list');
		$this->set(compact('users', 'patients'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Booking->id = $id;
		if (!$this->Booking->exists()) {
			throw new NotFoundException(__('Invalid booking'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Booking->delete()) {
			$this->Session->setFlash(__('The booking has been deleted.'));
		} else {
			$this->Session->setFlash(__('The booking could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


	
}
