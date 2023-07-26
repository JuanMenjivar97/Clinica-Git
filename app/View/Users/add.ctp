<div class="users form">

<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('user_role',array('label' => 'Rol','type' => 'select', 'options' => array(
			'ADMIN' => 'ADMIN','TERAPEUTA' => 'TERAPEUTA')));
		echo $this->Form->input('description',array('label' => 'Descripción','type' => 'select', 'options' => array(
			'VOLUNTARIADO' => 'VOLUNTARIADO','SERVICIO SOCIAL' => 'SERVICIO SOCIAL','PRÁCTICA'=>'PRACTICA','COORDINACION'=>'COORDINACION')));
	?>

			<div class="col s12" style="margin-bottom: 20px">
                <?php echo $this->Html->link('cancelar', ['controller' => 'users', 'action' => 'index'], array('class'=>'white-text right btn-flat waves-effect waves-yellow red')); ?>
                <?php echo $this->Form->postButton('guardar', ['controller' => 'bookings', 'action' => 'add'], array('class'=>'white-text right btn-flat waves-effect waves-yellow  blue darken-3','style' => 'margin-right:15px')); ?>
            </div>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Bookings'), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Booking'), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
	</ul>
</div>
