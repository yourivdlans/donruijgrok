<div class="row">
	<?=$this->element('../bookings_dates/_admin_form')?>
</div>
<div class="well">
	<?=$this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('BookingsDate.id')), array('class'=>'btn danger'), sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('BookingsDate.id'))); ?>
	<?=$this->Html->link(__('List Bookings Dates', true), array('action' => 'index'), array('class'=>'btn'));?>
</div>