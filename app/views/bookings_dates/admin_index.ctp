<div class="row">
	<div class="span14 columns">
		<h1><?php __('Bookings Dates');?></h1>
		<table class="common-table zebra-striped">
		<tr>
			<th><?=$this->Paginator->sort('id');?></th>
			<th><?=$this->Paginator->sort('date');?></th>
			<th><?=$this->Paginator->sort('location');?></th>
			<th><?=$this->Paginator->sort('venue');?></th>
			<th>Tickets Url</th>
			<th><?=$this->Paginator->sort('created');?></th>
			<th><?php __('Actions');?></th>
		</tr>
		<?php
		foreach ($bookingsDates as $bookingsDate):
		?>
		<tr>
			<td><?=$bookingsDate['BookingsDate']['id'];?></td>
			<td><?=$this->Time->format('d-m-Y', $bookingsDate['BookingsDate']['date']);?></td>
			<td><?=$bookingsDate['BookingsDate']['location'];?></td>
			<td><?=$bookingsDate['BookingsDate']['venue'];?></td>
			<?php
			if ( !empty($bookingsDate['BookingsDate']['tickets_url']) )
			{
				echo '<td>'.$this->Html->link('Link', $bookingsDate['BookingsDate']['tickets_url'], array('target' => '_blank', 'class' => 'btn info')).'</td>';
			}
			else
			{
				echo '<td></td>';
			}
			?>
			<td><?=$this->Time->timeAgoInWords($bookingsDate['BookingsDate']['created'], array('format' => 'd-m-Y'));?></td>
			<td>
				<?=$this->Html->link(__('Edit', true), array('action' => 'edit', $bookingsDate['BookingsDate']['id']), array('class'=>'btn small')); ?>
				<?=$this->Html->link(__('Delete', true), array('action' => 'delete', $bookingsDate['BookingsDate']['id']), array('class'=>'btn small danger'), sprintf(__('Are you sure you want to delete # %s?', true), $bookingsDate['BookingsDate']['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
	<p style="float:right;">
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>
	</p>

		<div class="pagination">
			<ul>
				<?=$this->Paginator->prev('&larr; '.__('Previous', true), array('tag'=>'li','class'=>'prev', 'escape'=>false), '<a href="#">&larr; '.__('Previous',true).'</a>', array('tag'=>'li','class'=>'prev disabled', 'escape'=>false));?>
				<?=$this->PaginatorExtended->numbers(array('tag'=>'li','separator'=>'','disabled'=>'active'));?>
				<?=$this->Paginator->next(__('Next', true).' &rarr;', array('tag'=>'li','class'=>'next','escape'=>false), '<a href="#">'.__('Next', true).' &rarr;</a>', array('tag'=>'li','class' => 'next disabled', 'escape'=>false));?>
			</ul>
		</div>
		<div class="well">
			<?=$this->Html->link(__('New Bookings Date', true), array('action' => 'add'), array('class'=>'btn primary')); ?>
		</div>
	</div>
</div>