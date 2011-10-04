<div class="bookingsDates view">
<h2><?php  __('Bookings Date');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bookingsDate['BookingsDate']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bookingsDate['BookingsDate']['date']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Location'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bookingsDate['BookingsDate']['location']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Venue'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bookingsDate['BookingsDate']['venue']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tickets Url'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bookingsDate['BookingsDate']['tickets_url']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bookingsDate['BookingsDate']['created']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bookings Date', true), array('action' => 'edit', $bookingsDate['BookingsDate']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Bookings Date', true), array('action' => 'delete', $bookingsDate['BookingsDate']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $bookingsDate['BookingsDate']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bookings Dates', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bookings Date', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
