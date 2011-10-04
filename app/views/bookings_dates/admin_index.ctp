<div class="bookingsDates index">
	<h1><?php __('Bookings Dates');?></h1>
	<table cellpadding="0" cellspacing="0">
	<thead>
		<tr>
					<th><?php echo $this->Paginator->sort('id');?></th>
					<th><?php echo $this->Paginator->sort('date');?></th>
					<th><?php echo $this->Paginator->sort('location');?></th>
					<th><?php echo $this->Paginator->sort('venue');?></th>
					<th><?php echo $this->Paginator->sort('tickets_url');?></th>
					<th><?php echo $this->Paginator->sort('created');?></th>
					<th class="actions">&nbsp;</th>
		</tr>
	</thead>
	<tbody>
	<?php
	foreach ($bookingsDates as $bookingsDate)
	{
	?>
	<tr>
		<td><?php echo $bookingsDate['BookingsDate']['id']; ?>&nbsp;</td>
		<td><?php echo $bookingsDate['BookingsDate']['date']; ?>&nbsp;</td>
		<td><?php echo $bookingsDate['BookingsDate']['location']; ?>&nbsp;</td>
		<td><?php echo $bookingsDate['BookingsDate']['venue']; ?>&nbsp;</td>
		<td><?php echo $bookingsDate['BookingsDate']['tickets_url']; ?>&nbsp;</td>
		<td><?php echo $bookingsDate['BookingsDate']['created']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $bookingsDate['BookingsDate']['id']), array('class' => 'button plain small green')); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $bookingsDate['BookingsDate']['id']), array('class' => 'button plain small orange')); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $bookingsDate['BookingsDate']['id']), array('class' => 'button plain small red'), sprintf(__('Are you sure you want to delete # %s?', true), $bookingsDate['BookingsDate']['id'])); ?>
		</td>
	</tr>
<?php } ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Bookings Date', true), array('action' => 'add')); ?></li>
	</ul>
</div>