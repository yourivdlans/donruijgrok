<div class="pages index">
	<h1><?php __('Pages');?></h1>
	<table cellpadding="0" cellspacing="0">
	<thead>
		<tr>
					<th class="actions">&nbsp;</th>
		</tr>
	</thead>
	<tbody>
	<?php
	foreach ($pages as $page)
	{
	?>
	<tr>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $page['Page']['']), array('class' => 'button plain small green')); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $page['Page']['']), array('class' => 'button plain small orange')); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $page['Page']['']), array('class' => 'button plain small red'), sprintf(__('Are you sure you want to delete # %s?', true), $page['Page'][''])); ?>
		</td>
	</tr>
<?php } ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Page', true), array('action' => 'add')); ?></li>
	</ul>
</div>