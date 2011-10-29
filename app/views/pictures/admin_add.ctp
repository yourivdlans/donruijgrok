<?php $errors = $this->Form->validationErrors['Picture'];?>
<div class="row">
	<div class="span16 columns">
	<?=$this->Form->create('Picture', array(
		'type' => 'file',
		'inputDefaults' => array(
			'label' => false,
			'error' => false
		)
	));?>
	<fieldset>
		<legend><?php __('Admin Add Picture'); ?></legend>
		<div class="clearfix<?php if (!empty($errors) && array_key_exists('title',$errors)) { echo ' error'; }?>">
			<?php
			echo $this->Form->label('title');
        	$after = '';
        	if (!empty($errors) && array_key_exists('title',$errors)) {
        		$after = '<span class="help-inline">'.$errors['title'].'</span>';
        	}
        	echo $this->Form->input('title',array('after'=>$after));
        	?>
        </div>
		<div class="clearfix<?php if (!empty($errors) && array_key_exists('file',$errors)) { echo ' error'; }?>">
			<?php
			echo $this->Form->label('file');
        	$after = '';
        	if (!empty($errors) && array_key_exists('file',$errors)) {
        		$after = '<span class="help-inline">'.$errors['file'].'</span>';
        	}
        	echo $this->Form->input('file',array('after'=>$after, 'type' => 'file'));
        	?>
        </div>
		<div class="actions">
			<?=$this->Form->button(__('Save', true),array('class'=>'btn primary'));?>
		</div>
	</fieldset>
    <?=$this->Form->end(); ?>
	</div>
</div>
<div class="well">
	<?=$this->Html->link(__('List Pictures', true), array('action' => 'index'), array('class'=>'btn'));?>
</div>