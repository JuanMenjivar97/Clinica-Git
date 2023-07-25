<div class="patients form">
<?php echo $this->Form->create('Patient'); ?>
	<fieldset>
		<legend><?php echo __('Edit Patient'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('dui');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('status');
		echo $this->Form->input('gender');
		echo $this->Form->input('birthdate');
		echo $this->Form->input('address');
		echo $this->Form->input('email');
		echo $this->Form->input('cell_phone_number');
		echo $this->Form->input('token_exam');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Patient.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Patient.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Patients'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Bookings'), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Booking'), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Exam Numbers'), array('controller' => 'exam_numbers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exam Number'), array('controller' => 'exam_numbers', 'action' => 'add')); ?> </li>
	</ul>
</div>
