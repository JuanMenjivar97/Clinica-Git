<div class="collection">
	<div class="bookings form">
	<div class="col s10 offset-s1">
		
		<?php echo $this->Form->create('Booking'); ?>

		<h5><strong><?php echo __('Agregar reserva'); ?></strong></h5>
		<div class="input-field col s12 m6">
			<?php echo $this->Form->input('room', array('label'=>'Salón','type'=>'select','options'=>array(
			'SALÓN 1'=>'SALÓN 1','SALÓN 2'=>'SALÓN 2','SALÓN 3'=>'SALÓN 3','CÁMARA GESELL'=>'CÁMARA GESELL')));?>
		</div>
		<div class="input-field col s12 m6">
		<?php	echo $this->Form->input('faculty', array('label'=>'Facultad','type'=>'select','options'=>array(
			'FAC. DE INGENIERIA'=>'FAC. DE INGENIERIA','FAC. CIENCIAS SOCIALES'=>'FAC. CIENCIAS SOCIALES',
			'FAC. DE MEDICINA'=>'FAC. DE MEDICINA','FAC. DE ODONTOLOGIA'=>'FAC. DE ODONTOLOGIA')));?>
		</div>	

		<!-- <div class="input-field col s12 m6">
		<?php 	//echo $this->Form->input('booking_date',array('label'=>'Fecha reserva','type'=>'date'));?>
		</div> -->
		<!-- <div class="input-field col s12 m6">
		<?php   //echo $this->Form->input('start_time',array('label'=>'Tiempo de inicio'));?>
		</div>
		<div class="input-field col s12 m6">
		<?php  //echo $this->Form->input('finish_time',array('label'=>'Tiempo de finalización'));?>
		</div> -->
		<div class="input-field col s12 m6">
		<?php	echo $this->Form->input('status_room',array('label'=>'Salón','type'=>'select','options'=>array(
			'OCUPADO'=>'OCUPADO','PENDIENTE'=>'PENDIENTE')));?>
		</div>
		<div class="input-field col s12 m6">
		<?php	echo $this->Form->input('patient_id',array('label'=>'Paciente'));?>
		</div>
					<!-- Opción de tiempo y fecha. Materialize -->
		<div class="input-field col s12 m4">
			<label for="BookingBookingDate" id="BookingBookingDate">Fecha de la cita</label>
			<input type="text" class="datepicker" name="data[Booking][booking_date]" id="BookingBookingDate">
		</div>
		<div class="input-field col s12 m4">
			<label for="BookingStartTime" id="BookingStartTime">Hora de inicio</label>
			<input type="text" class="timepicker" name="data[Booking][start_time]" id="BookingStartTime">
		</div>
		<div class="input-field col s12 m4">
			<label for="BookingFinishTime" id="BookingFinishTime">Hora de finalización</label>
			<input type="text" class="timepicker" name="data[Booking][finish_time]" id="BookingFinishTime">
		</div>
			
		<div class="input-field col s12 m12">
		<?php	echo $this->Form->input('comment',array('label'=>'Comentario'));?>
		</div>
			<!-- Botones de acción -->
			<div class="col s12" style="margin-bottom: 20px">
			<?php echo $this->Html->link('cancelar', ['controller' => 'bookings', 'action' => 'index'], array('class'=>'white-text right btn-flat waves-effect waves-yellow red')); ?>
			<?php echo $this->Form->postButton('guardar', ['controller' => 'bookings', 'action' => 'add'], array('class'=>'white-text right btn-flat waves-effect waves-yellow  blue darken-3','style' => 'margin-right:15px')); ?>
		</div>
		
		<?php echo $this->Form->end(); ?>
	</div>
	</div>
</div>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Bookings'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
