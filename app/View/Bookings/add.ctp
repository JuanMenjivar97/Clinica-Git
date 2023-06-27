<div class="bookings form">
<?php echo $this->Form->create('Booking'); ?>
	<fieldset>
		<legend><?php echo __('Add Booking'); ?></legend>
	<?php
		echo $this->Form->input('room', array('label'=>'Salón','type'=>'select','options'=>array(
			'SALÓN 1'=>'SALÓN 1','SALÓN 2'=>'SALÓN 2','SALÓN 3'=>'SALÓN 3','CÁMARA GESELL'=>'CÁMARA GESELL')));
		echo $this->Form->input('faculty', array('label'=>'Facultad'));
		echo $this->Form->input('booking_date',array('label'=>'Fecha reserva'));
		echo $this->Form->input('start_time',array('label'=>'Tiempo de inicio'));
		echo $this->Form->input('finish_time',array('label'=>'Tiempo de finalización'));
		echo $this->Form->input('status_room',array('label'=>'Estado de salón'));
		echo $this->Form->input('comment',array('label'=>'Comentario'));
		echo $this->Form->input('patient_id',array('label'=>'Paciente'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Bookings'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
