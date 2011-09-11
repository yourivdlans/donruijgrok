<div class="pages form">
<?php echo $this->Form->create('Page');?>
	<fieldset>
 		<legend><?php __('Admin Edit Page'); ?></legend>
	<?php
	?>
	</fieldset>
<?=$this->Form->end(array('label' => __('Submit', true), 'class' => 'button large'));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Page.')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Page.'))); ?></li>
		<li><?php echo $this->Html->link(__('List Pages', true), array('action' => 'index'));?></li>
	</ul>
</div>