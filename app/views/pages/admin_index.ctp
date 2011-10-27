<div class="row">
	<div class="span16 columns">
		<h1><?php __('Pages');?></h1>
		<table class="common-table zebra-striped">
		<tr>
			<th><?=$this->Paginator->sort('id');?></th>
			<th><?=$this->Paginator->sort('title');?></th>
			<th><?=$this->Paginator->sort('created');?></th>
			<th><?=$this->Paginator->sort('modified');?></th>
			<th><?php __('Actions');?></th>
		</tr>
		<?php
		$i = 0;
		foreach ($pages as $page):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
	<tr<?=$class;?>>
		<td><?=$page['Page']['id']; ?>&nbsp;</td>
		<td><?=$page['Page']['title']; ?>&nbsp;</td>
		<td><?=$page['Page']['created']; ?>&nbsp;</td>
		<td><?=$page['Page']['modified']; ?>&nbsp;</td>
		<td>
			<?=$this->Html->link(__('Edit', true), array('action' => 'edit', $page['Page']['id']), array('class'=>'btn small')); ?>
			<?=$this->Html->link(__('Delete', true), array('action' => 'delete', $page['Page']['id']), array('class'=>'btn small danger'), sprintf(__('Are you sure you want to delete # %s?', true), $page['Page']['id'])); ?>
		</td>
	</tr>
	<?php endforeach; ?>
	</table>
	<p style="float:right;">
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>
	</p>

		<div class="pagination">
			<ul>
				<?=$this->Paginator->prev(
					'&larr; '.__('Previous', true),
					array(
						'tag' => 'li',
						'class' => 'prev',
						'escape' => false
					),
					'<a href="#">&larr; '.__('Previous',true).'</a>',
					array(
						'tag' => 'li',
						'class' => 'prev disabled',
						'escape' => false
					)
				);?>
				<?=$this->PaginatorExtended->numbers(
					array(
						'tag' => 'li',
						'separator' => '',
						'disabled' => 'active'
					)
				);?>
				<?=$this->Paginator->next(
					__('Next', true).' &rarr;',
					array(
						'tag' => 'li',
						'class' => 'next',
						'escape' => false
					),
					'<a href="#">'.__('Next', true).' &rarr;</a>',
					array(
						'tag' => 'li',
						'class' => 'next disabled',
						'escape' => false
					)
				);?>
			</ul>
		</div>
		<div class="well">
			<?=$this->Html->link(__('New Page', true), array('action' => 'add'), array('class'=>'btn primary')); ?>
		</div>
	</div>
</div>