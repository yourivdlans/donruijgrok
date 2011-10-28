<?php $errors = $this->Form->validationErrors['Picture'];?>
<div class="row">
	<div class="span16 columns">
	<?php echo $this->Form->create('Picture', array(
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
		<div class="clearfix<?php if (!empty($errors) && array_key_exists('filename',$errors)) { echo ' error'; }?>">
			<?php
			echo $this->Form->label('filename');
        	$after = '';
        	if (!empty($errors) && array_key_exists('filename',$errors)) {
        		$after = '<span class="help-inline">'.$errors['filename'].'</span>';
        	}
        	echo $this->Form->input('filename',array('after'=>$after));
        	?>
        </div>
		<div class="actions">
			<?php echo $this->Form->button(__('Save', true),array('class'=>'btn primary'));?>
		</div>
	</fieldset>
    <?php echo $this->Form->end(); ?>
	</div>
</div>
<div class="well">
	<?php echo $this->Html->link(__('List Pictures', true), array('action' => 'index'), array('class'=>'btn'));?>
</div>