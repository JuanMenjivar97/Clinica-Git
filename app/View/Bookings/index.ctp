<div class="bookings index">
	<div class="col s12">
		<div  class="col s10"><h2><?php echo __('Reservas'); ?></h2></div>
		<div class="col s2" style="margin-top: 45px"><strong><?php echo $this->Html->link(__('Nueva Reserva ➕'), array('action' => 'add'),
		array('class'=>'btn right yellow accent-2 black-text')); ?></div></strong>
	</div>
	
	<div class="class">
	
		<table cellpadding="0" cellspacing="0">
		<thead>
		<tr>
				<th><?php echo $this->Paginator->sort('id','id'); ?></th>
				<th><?php echo $this->Paginator->sort('room','Sala'); ?></th>
				<th><?php echo $this->Paginator->sort('faculty','Facultad'); ?></th>
				<th><?php echo $this->Paginator->sort('booking_date','Fecha de reserva'); ?></th>
				<th><?php echo $this->Paginator->sort('start_time','Hora de inicio'); ?></th>
				<th><?php echo $this->Paginator->sort('finish_time','Hora de finalización'); ?></th>
				<th><?php echo $this->Paginator->sort('status_room','Estado de la sala'); ?></th>
				<th><?php echo $this->Paginator->sort('comment','Comentarios'); ?></th>
				<!-- <th><?php echo $this->Paginator->sort('created'); ?></th>
				<th><?php //echo $this->Paginator->sort('modified'); ?></th> -->
				<th><?php echo $this->Paginator->sort('user_id','Terapeuta'); ?></th>
				<th><?php echo $this->Paginator->sort('patient_id','Paciente'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($bookings as $booking): ?>
		<tr>
			<td><?php echo h($booking['Booking']['id']); ?>&nbsp;</td>
			<td><?php echo h($booking['Booking']['room']); ?>&nbsp;</td>
			<td><?php echo h($booking['Booking']['faculty']); ?>&nbsp;</td>
			<td><?php echo h($booking['Booking']['booking_date']); ?>&nbsp;</td>
			<td><?php echo h($booking['Booking']['start_time']); ?>&nbsp;</td>
			<td><?php echo h($booking['Booking']['finish_time']); ?>&nbsp;</td>
			<td><?php echo h($booking['Booking']['status_room']); ?>&nbsp;</td>
			<td><?php echo h($booking['Booking']['comment']); ?>&nbsp;</td>
			<!-- <td><?php //echo h($booking['Booking']['created']); ?>&nbsp;</td>
			<td><?php //echo h($booking['Booking']['modified']); ?>&nbsp;</td> -->
			<td>
				<?php echo $this->Html->link($booking['User']['full_name_user'], array('controller' => 'users', 'action' => 'view', $booking['User']['id'])); ?>
			</td>
			<td>
				<?php echo $this->Html->link($booking['Patient']['full_name'], array('controller' => 'patients', 'action' => 'view', $booking['Patient']['id'])); ?>
			</td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('action' => 'view', $booking['Booking']['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $booking['Booking']['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $booking['Booking']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $booking['Booking']['id']))); ?>
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
</div>

<!-- <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php //echo $this->Html->link(__('New Booking'), array('action' => 'add')); ?></li>
		<li><?php //echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div> -->
