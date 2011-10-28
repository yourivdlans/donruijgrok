<?php $errors = $this->Form->validationErrors['BookingsDate'];?>
<div class="row">
	<div class="span16 columns">
	<?php echo $this->Form->create('BookingsDate', array(
				'inputDefaults' => array(
					'label' => false,
					'error' => false
				)
			));?>
	<fieldset>
		<legend><?php __('Admin Add Bookings Date'); ?></legend>
		<div class="clearfix<?php if (!empty($errors) && array_key_exists('date',$errors)) { echo ' error'; }?>">
			<?php
			echo $this->Form->label('date');
        	$after = '';
        	if (!empty($errors) && array_key_exists('date',$errors)) {
        		$after = '<span class="help-inline">'.$errors['date'].'</span>';
        	}
        	echo $this->Form->input('date',array('after'=>$after));
        	?>
        </div>
		<div class="clearfix<?php if (!empty($errors) && array_key_exists('location',$errors)) { echo ' error'; }?>">
			<?php
			echo $this->Form->label('location');
        	$after = '';
        	if (!empty($errors) && array_key_exists('location',$errors)) {
        		$after = '<span class="help-inline">'.$errors['location'].'</span>';
        	}
        	echo $this->Form->input('location',array('after'=>$after));
        	?>
        </div>
		<div class="clearfix<?php if (!empty($errors) && array_key_exists('venue',$errors)) { echo ' error'; }?>">
			<?php
			echo $this->Form->label('venue');
        	$after = '';
        	if (!empty($errors) && array_key_exists('venue',$errors)) {
        		$after = '<span class="help-inline">'.$errors['venue'].'</span>';
        	}
        	echo $this->Form->input('venue',array('after'=>$after));
        	?>
        </div>
		<div class="clearfix<?php if (!empty($errors) && array_key_exists('tickets_url',$errors)) { echo ' error'; }?>">
			<?php
			echo $this->Form->label('tickets_url');
        	$after = '';
        	if (!empty($errors) && array_key_exists('tickets_url',$errors)) {
        		$after = '<span class="help-inline">'.$errors['tickets_url'].'</span>';
        	}
        	echo $this->Form->input('tickets_url',array('after'=>$after));
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
	<?php echo $this->Html->link(__('List Bookings Dates', true), array('action' => 'index'), array('class'=>'btn'));?>
</div>