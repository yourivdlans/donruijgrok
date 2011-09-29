<div class="pictures form">
<?php echo $this->Form->create('Picture');?>
	<fieldset>
 		<legend><?php __('Admin Add Picture'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('filename');
	?>
	</fieldset>
<?=$this->Form->end(array('label' => __('Submit', true), 'class' => 'button large'));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Pictures', true), array('action' => 'index'));?></li>
	</ul>
</div>