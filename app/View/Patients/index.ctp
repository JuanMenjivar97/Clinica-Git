<div class="patients index">
	<div class="col s12">
		<div class="col s10"><h2><?php echo __('Pacientes'); ?></h2></div>
		<div class="col s2" style="margin-top: 45px"><strong><?php echo $this->Html->link(__('Nuevo Paciente ➕'), array('action' => 'add'),array('class'=>'btn right yellow accent-2 black-text')); ?></div></strong>
	</div>
		<div class="card-panel">

		<table cellpadding="0" cellspacing="0">
		<thead>
		<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('dui','Dui'); ?></th>
				<th><?php echo $this->Paginator->sort('first_name','Nombres'); ?></th>
				<th><?php echo $this->Paginator->sort('last_name','Apellidos'); ?></th>
				<th><?php echo $this->Paginator->sort('age','Edad'); ?></th>
				<th><?php echo $this->Paginator->sort('gender','Sexo'); ?></th>
				<th><?php echo $this->Paginator->sort('birthdate','Nacimiento'); ?></th>
				<th><?php echo $this->Paginator->sort('address','Dirección'); ?></th>
				<th><?php echo $this->Paginator->sort('email','Email'); ?></th>
				<th><?php echo $this->Paginator->sort('cell_phone_number','Número de teléfono'); ?></th>
				<th><?php echo $this->Paginator->sort('created','Creación'); ?></th>
				<th><?php echo $this->Paginator->sort('modified','Modificado'); ?></th>
				<th><?php echo $this->Paginator->sort('municipality_id'); ?></th>
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
			<td><?php echo h($patient['Patient']['age']); ?>&nbsp;</td>
			<td><?php echo h($patient['Patient']['gender']); ?>&nbsp;</td>
			<td><?php echo h($patient['Patient']['birthdate']); ?>&nbsp;</td>
			<td><?php echo h($patient['Patient']['address']); ?>&nbsp;</td>
			<td><?php echo h($patient['Patient']['email']); ?>&nbsp;</td>
			<td><?php echo h($patient['Patient']['cell_phone_number']); ?>&nbsp;</td>
			<td><?php echo h($patient['Patient']['created']); ?>&nbsp;</td>
			<td><?php echo h($patient['Patient']['modified']); ?>&nbsp;</td>
			<td>
				<?php echo $this->Html->link($patient['Municipality']['name'], array('controller' => 'municipalities', 'action' => 'view', $patient['Municipality']['id'])); ?>
			</td>
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
			'format' => __('Página {:page} of {:pages}, mostrando {:current} registros de {:count} en total, comenzando en el registro {:start}, y terminando en {:end}')
		));
		?>	</p>
		<div class="paging">
		<?php
			echo $this->Paginator->prev('< ' . __('previous '), array(), null, array('class' => 'prev disabled'));
			echo $this->Paginator->numbers(array('separator' => '  '));
			echo $this->Paginator->next(__(' next') . ' >', array(), null, array('class' => 'next disabled'));
		?>
		</div>
	</div>
</div>
<!-- <div class="actions">
	<h3><?php //echo __('Actions'); ?></h3>
	<ul>
		<li><?php //echo $this->Html->link(__('New Patient'), array('action' => 'add')); ?></li>
		<li><?php //echo $this->Html->link(__('List Municipalities'), array('controller' => 'municipalities', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Municipality'), array('controller' => 'municipalities', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Bookings'), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Booking'), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
	</ul>
</div> -->
