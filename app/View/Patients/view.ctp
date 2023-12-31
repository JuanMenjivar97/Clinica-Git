<div class="patients view">
<h2><?php echo __('Vista Pacientes'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dui'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['dui']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birthdate'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['birthdate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cell Phone Number'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['cell_phone_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Token Exam'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['token_exam']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Patient'), array('action' => 'edit', $patient['Patient']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Patient'), array('action' => 'delete', $patient['Patient']['id']), array(), __('Are you sure you want to delete # %s?', $patient['Patient']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bookings'), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Booking'), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Exam Numbers'), array('controller' => 'exam_numbers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exam Number'), array('controller' => 'exam_numbers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Bookings'); ?></h3>
	<?php if (!empty($patient['Booking'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Room'); ?></th>
		<th><?php echo __('Faculty'); ?></th>
		<th><?php echo __('Booking Date'); ?></th>
		<th><?php echo __('Start Time'); ?></th>
		<th><?php echo __('Finish Time'); ?></th>
		<th><?php echo __('Status Room'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Patient Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($patient['Booking'] as $booking): ?>
		<tr>
			<td><?php echo $booking['id']; ?></td>
			<td><?php echo $booking['room']; ?></td>
			<td><?php echo $booking['faculty']; ?></td>
			<td><?php echo $booking['booking_date']; ?></td>
			<td><?php echo $booking['start_time']; ?></td>
			<td><?php echo $booking['finish_time']; ?></td>
			<td><?php echo $booking['status_room']; ?></td>
			<td><?php echo $booking['comment']; ?></td>
			<td><?php echo $booking['created']; ?></td>
			<td><?php echo $booking['modified']; ?></td>
			<td><?php echo $booking['user_id']; ?></td>
			<td><?php echo $booking['patient_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'bookings', 'action' => 'view', $booking['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'bookings', 'action' => 'edit', $booking['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'bookings', 'action' => 'delete', $booking['id']), array(), __('Are you sure you want to delete # %s?', $booking['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Booking'), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Exam Numbers'); ?></h3>
	<?php if (!empty($patient['ExamNumber'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Age'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Ascendancy'); ?></th>
		<th><?php echo __('Res'); ?></th>
		<th><?php echo __('Est'); ?></th>
		<th><?php echo __('Soc'); ?></th>
		<th><?php echo __('Aut'); ?></th>
		<th><?php echo __('Cau'); ?></th>
		<th><?php echo __('Ori'); ?></th>
		<th><?php echo __('Com'); ?></th>
		<th><?php echo __('Vit'); ?></th>
		<th><?php echo __('Patient Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($patient['ExamNumber'] as $examNumber): ?>
		<tr>
			<td><?php echo $examNumber['id']; ?></td>
			<td><?php echo $examNumber['age']; ?></td>
			<td><?php echo $examNumber['status']; ?></td>
			<td><?php echo $examNumber['ascendancy']; ?></td>
			<td><?php echo $examNumber['res']; ?></td>
			<td><?php echo $examNumber['est']; ?></td>
			<td><?php echo $examNumber['soc']; ?></td>
			<td><?php echo $examNumber['aut']; ?></td>
			<td><?php echo $examNumber['cau']; ?></td>
			<td><?php echo $examNumber['ori']; ?></td>
			<td><?php echo $examNumber['com']; ?></td>
			<td><?php echo $examNumber['vit']; ?></td>
			<td><?php echo $examNumber['patient_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'exam_numbers', 'action' => 'view', $examNumber['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'exam_numbers', 'action' => 'edit', $examNumber['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'exam_numbers', 'action' => 'delete', $examNumber['id']), array(), __('Are you sure you want to delete # %s?', $examNumber['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Exam Number'), array('controller' => 'exam_numbers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
