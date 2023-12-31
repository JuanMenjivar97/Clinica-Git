<div class="users index">
	<div class="col s12">
	<div  class="col s10"><h2><?php echo __('Usuarios'); ?></h2></div>
	<div class="col s2" style="margin-top: 45px"><strong><?php echo $this->Html->link(__('Nuevo Usuario ➕'), array('action' => 'add'),array('class'=>'btn right yellow accent-2 black-text')); ?></div></strong>
	</div>

	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<!-- CAMBIAR EL CAMPO CORREO A USERNAME -->
			<th><?php echo $this->Paginator->sort('id','id'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name','Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name','Apellido'); ?></th>
			<th><?php echo $this->Paginator->sort('username','Email'); ?></th>
			<!-- <th><?php //echo $this->Paginator->sort('password','Contraseña'); ?></th> -->
			<th><?php echo $this->Paginator->sort('user_role','Rol de usuario'); ?></th>
			<th><?php echo $this->Paginator->sort('description','Descripción'); ?></th>
			<th><?php echo $this->Paginator->sort('created','Creado'); ?></th>
			<th><?php echo $this->Paginator->sort('modified','Modificado'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<!-- <td><?php //echo h($user['User']['password']); ?>&nbsp;</td> -->
		<td><?php echo h($user['User']['user_role']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['description']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Página {:page} de {:pages}, mostrandose {:current} registros de {:count} en total, empezando en el registro {:start}, terminando en {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<!-- <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Bookings'), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Booking'), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
	</ul>
</div> -->


