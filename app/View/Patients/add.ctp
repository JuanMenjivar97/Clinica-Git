<div class="collection">	
	<div class="patients form">
	<div class="col s10 offset-s1">
		<?php echo $this->Form->create('Patient'); ?>
		<h5><strong><?php echo __('Agregar paciente'); ?></strong></h5>				
			
				<div class="input-field col s12 m3">
				<?php echo $this->Form->input('dui',array('label'=>'DUI'));?>
				</div>

				<div class="input-field col s12 m3">
				<?php echo $this->Form->input('first_name',array('label'=>'Nombres'));?>
				</div>
				
				<div class="input-field col s12 m3">
				<?php echo $this->Form->input('last_name',array('label'=>'Apellidos'));?>
				</div>
				<div class="input-field col s12 m3">
				<?php echo $this->Form->input('status',array('label'=>'Estado'));?>
				</div>
				<?php echo $this->Form->input('gender',array('label'=>'Género','type'=>'select','options'=>array(
			'Femenino'=>'F','Masculino'=>'M')));?>
				
				<div class="input-field col s12 m12">
				<label for="PatientBirthdate" id="PatientBirthdate">Fecha de la cita</label>
				<input type="text" class="datepicker" name="data[Patient][birthdate]" id="PatientBirthdate">
				<!-- <?php //echo $this->Form->input('birthdate',array('label'=>'Fecha de nacimiento'));?> -->
				</div>
				
				<?php echo $this->Form->input('address',array('label'=>'Dirección'));?>
				
				<div class="input-field col s12 m6">
				<?php echo $this->Form->input('email',array('label'=>'Correo'));?>
				</div>
				<div class="input-field col s12 m6">
				<?php echo $this->Form->input('cell_phone_number',array('label'=>'Número teléfono'));?>
				</div>
				<?php //echo $this->Form->input('token_exam');?>

				<!-- Botones de acción -->
			<div class="col s12" style="margin-bottom: 20px">
			<?php echo $this->Html->link('cancelar', ['controller' => 'bookings', 'action' => 'index'], array('class'=>'white-text right btn-flat waves-effect waves-yellow red')); ?>
			<?php echo $this->Form->postButton('guardar', ['controller' => 'bookings', 'action' => 'add'], array('class'=>'white-text right btn-flat waves-effect waves-yellow  blue darken-3','style' => 'margin-right:15px')); ?>
		</div>
			
		<?php echo $this->Form->end(); ?>
		</div>
		</div>	
</div>

<!-- <div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>

				<li><?php echo $this->Html->link(__('List Patients'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Bookings'), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Booking'), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Exam Numbers'), array('controller' => 'exam_numbers', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Exam Number'), array('controller' => 'exam_numbers', 'action' => 'add')); ?> </li>
			</ul>
		</div> -->
