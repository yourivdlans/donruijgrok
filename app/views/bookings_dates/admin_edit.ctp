<div class="bookingsDates form">
<?php echo $this->Form->create('BookingsDate');?>
	<fieldset>
 		<legend><?php __('Admin Edit Bookings Date'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('date');
		echo $this->Form->input('location');
		echo $this->Form->input('venue');
		echo $this->Form->input('tickets_url');
	?>
	</fieldset>
<?=$this->Form->end(array('label' => __('Submit', true), 'class' => 'button large'));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('BookingsDate.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('BookingsDate.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Bookings Dates', true), array('action' => 'index'));?></li>
	</ul>
</div>