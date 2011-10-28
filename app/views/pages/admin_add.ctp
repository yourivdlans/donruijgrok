<?php
$errors = $this->Form->validationErrors['Page'];

echo $this->Html->script('tinymce/tiny_mce.js', array('inline' => false));
echo $this->Html->script('tinymce_build.js', array('inline' => false));
?>
<div class="row">
	<div class="span16 columns">
	<?php echo $this->Form->create('Page', array(
				'inputDefaults' => array(
					'label' => false,
					'error' => false
				)
			));?>
	<fieldset>
		<legend><?php __('Admin Add Page'); ?></legend>
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
		<div class="clearfix<?php if (!empty($errors) && array_key_exists('content',$errors)) { echo ' error'; }?>">
			<?php
			echo $this->Form->label('content');
        	$after = '';
        	if (!empty($errors) && array_key_exists('content',$errors)) {
        		$after = '<span class="help-inline">'.$errors['content'].'</span>';
        	}
        	echo $this->Form->input('content',array('after'=>$after));
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
	<?php echo $this->Html->link(__('List Pages', true), array('action' => 'index'), array('class'=>'btn'));?>
</div>