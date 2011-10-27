<?php $errors = $this->Form->validationErrors['Page'];?>
<div class="row">
	<div class="span16 columns">
	<?php echo $this->Form->create('Page', array(
				'inputDefaults' => array(
					'label' => false,
					'error' => false
				)
			));?>
	<fieldset>
		<legend><?php __('Admin Edit Page'); ?></legend>
		<div class="clearfix<?php if (!empty($errors) && array_key_exists('id',$errors)) { echo ' error'; }?>" style="display:none;">
			<?php
			echo $this->Form->label('id');
        	$after = '';
        	if (!empty($errors) && array_key_exists('id',$errors)) {
        		$after = '<span class="help-inline">'.$errors['id'].'</span>';
        	}
        	echo $this->Form->input('id',array('after'=>$after));
        	?>
        </div>
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
		<div class="clearfix<?php if (!empty($errors) && array_key_exists('slug',$errors)) { echo ' error'; }?>">
			<?php
			echo $this->Form->label('slug');
        	$after = '';
        	if (!empty($errors) && array_key_exists('slug',$errors)) {
        		$after = '<span class="help-inline">'.$errors['slug'].'</span>';
        	}
        	echo $this->Form->input('slug',array('after'=>$after));
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
		<div class="clearfix<?php if (!empty($errors) && array_key_exists('position',$errors)) { echo ' error'; }?>">
			<?php
			echo $this->Form->label('position');
        	$after = '';
        	if (!empty($errors) && array_key_exists('position',$errors)) {
        		$after = '<span class="help-inline">'.$errors['position'].'</span>';
        	}
        	echo $this->Form->input('position',array('after'=>$after));
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
	<?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $this->Form->value('Page.id')), array('class'=>'btn danger'), sprintf(__('Estas seguro que quieres borrar el # %s?', true), $this->Form->value('Page.id'))); ?>
	<?php echo $this->Html->link(__('List Pages', true), array('action' => 'index'), array('class'=>'btn'));?>
</div>