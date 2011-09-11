<div class="pages view">
<h2><?php  __('Page');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Page', true), array('action' => 'edit', $page['Page'][''])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Page', true), array('action' => 'delete', $page['Page']['']), null, sprintf(__('Are you sure you want to delete # %s?', true), $page['Page'][''])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pages', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
