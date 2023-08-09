<div class="patients index">
	<div class="col s12">
		<div  class="col s10"><h2><?php echo __('Pacientes'); ?></h2></div>
		<div class="col s2" style="margin-top: 45px"><strong><?php echo $this->Html->link(__('Nuevo Paciente ➕'), array('action' => 'add'),
		array('class'=>'btn right yellow accent-2 black-text')); ?></div></strong>
	</div>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id','id'); ?></th>
			<th><?php echo $this->Paginator->sort('dui','DUI'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name','Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name','Apellido'); ?></th>
			<th><?php echo $this->Paginator->sort('status','Estatus'); ?></th>
			<th><?php echo $this->Paginator->sort('gender','Género'); ?></th>
			<th><?php echo $this->Paginator->sort('birthdate','Fecha de nacimiento'); ?></th>
			<th><?php echo $this->Paginator->sort('address','Dirección'); ?></th>
			<th><?php echo $this->Paginator->sort('email','Email'); ?></th>
			<th><?php echo $this->Paginator->sort('cell_phone_number','N° Teléfono'); ?></th>
			<th><?php echo $this->Paginator->sort('created','Creado'); ?></th>
			<th><?php echo $this->Paginator->sort('modified','Modificado'); ?></th>
			<th><?php //echo $this->Paginator->sort('token_exam'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($patients as $patient): ?>
	<tr>
		<td><?php echo h($patient['Patient']['id']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['dui']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['status']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['gender']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['birthdate']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['address']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['email']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['cell_phone_number']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['created']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['modified']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['token_exam']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $patient['Patient']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $patient['Patient']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $patient['Patient']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $patient['Patient']['id']))); ?>
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
		echo $this->Paginator->prev('< ' . __('previo'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => '   '));
		echo $this->Paginator->next(__('siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<!-- <h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php //echo $this->Html->link(__('New Patient'), array('action' => 'add')); ?></li>
		<li><?php //echo $this->Html->link(__('List Bookings'), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Booking'), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Exam Numbers'), array('controller' => 'exam_numbers', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Exam Number'), array('controller' => 'exam_numbers', 'action' => 'add')); ?> </li>
	</ul> -->
</div>
