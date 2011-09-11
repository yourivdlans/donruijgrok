<div class="pages form">
<?php echo $this->Form->create('Page');?>
	<fieldset>
 		<legend><?php __('Admin Add Page'); ?></legend>
	<?php
	?>
	</fieldset>
<?=$this->Form->end(array('label' => __('Submit', true), 'class' => 'button large'));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Pages', true), array('action' => 'index'));?></li>
	</ul>
</div>