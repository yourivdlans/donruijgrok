<div class="row">
	<div class="span14 columns">
		<h1><?php __('Bookings Dates');?></h1>
		<table class="common-table zebra-striped">
		<tr>
					<th><?php echo $this->Paginator->sort('id');?></th>
					<th><?php echo $this->Paginator->sort('date');?></th>
					<th><?php echo $this->Paginator->sort('location');?></th>
					<th><?php echo $this->Paginator->sort('venue');?></th>
					<th><?php echo $this->Paginator->sort('tickets_url');?></th>
					<th><?php echo $this->Paginator->sort('created');?></th>
					<th><?php __('Actions');?></th>
		</tr>
		<?php
		$i = 0;
		foreach ($bookingsDates as $bookingsDate):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
	<tr<?php echo $class;?>>
		<td><?php echo $bookingsDate['BookingsDate']['id']; ?>&nbsp;</td>
		<td><?php echo $bookingsDate['BookingsDate']['date']; ?>&nbsp;</td>
		<td><?php echo $bookingsDate['BookingsDate']['location']; ?>&nbsp;</td>
		<td><?php echo $bookingsDate['BookingsDate']['venue']; ?>&nbsp;</td>
		<td><?php echo $bookingsDate['BookingsDate']['tickets_url']; ?>&nbsp;</td>
		<td><?php echo $bookingsDate['BookingsDate']['created']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $bookingsDate['BookingsDate']['id']), array('class'=>'btn small')); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $bookingsDate['BookingsDate']['id']), array('class'=>'btn small danger'), sprintf(__('Are you sure you want to delete # %s?', true), $bookingsDate['BookingsDate']['id'])); ?>
		</td>
	</tr>
	<?php endforeach; ?>
	</table>
	<p style="float:right;">
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

		<div class="pagination">
			<ul>
				<?php echo $this->Paginator->prev('&larr; '.__('Previous', true), array('tag'=>'li','class'=>'prev', 'escape'=>false), '<a href="#">&larr; '.__('Previous',true).'</a>', array('tag'=>'li','class'=>'prev disabled', 'escape'=>false));?>
				<?php echo $this->Paginator->numbers(array('tag'=>'li','separator'=>'','disabled'=>'active'));?>
				<?php echo $this->Paginator->next(__('Next', true).' &rarr;', array('tag'=>'li','class'=>'next','escape'=>false), '<a href="#">'.__('Next', true).' &rarr;</a>', array('tag'=>'li','class' => 'next disabled', 'escape'=>false));?>
			</ul>
		</div>
		<div class="well">
			<?php echo $this->Html->link(__('New Bookings Date', true), array('action' => 'add'), array('class'=>'btn primary')); ?>
		</div>
	</div>
</div>