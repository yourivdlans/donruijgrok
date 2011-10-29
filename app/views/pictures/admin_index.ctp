<div class="row">
	<div class="span14 columns">
		<h1><?php __('Pictures');?></h1>
		<table class="common-table zebra-striped">
		<tr>
			<th><?=$this->Paginator->sort('id');?></th>
			<th><?=$this->Paginator->sort('title');?></th>
			<th>Thumbnail</th>
			<th><?=$this->Paginator->sort('created');?></th>
			<th><?php __('Actions');?></th>
		</tr>
		<?php
		foreach ($pictures as $picture):
		?>
		<tr>
			<td><?=$picture['Picture']['id']; ?>&nbsp;</td>
			<td><?=$picture['Picture']['title']; ?>&nbsp;</td>
			<td><?=$this->Html->image('/media/filter/s/'.$picture['Picture']['dirname'].'/'.$picture['Picture']['basename']);?></td>
			<td><?=$this->Time->timeAgoInWords($picture['Picture']['created'], array('format' => 'd-m-Y'));?>&nbsp;</td>
			<td>
				<?=$this->Html->link(__('Delete', true), array('action' => 'delete', $picture['Picture']['id']), array('class'=>'btn small danger'), sprintf(__('Are you sure you want to delete # %s?', true), $picture['Picture']['id'])); ?>
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
				<?=$this->Paginator->prev('&larr; '.__('Previous', true), array('tag'=>'li','class'=>'prev', 'escape'=>false), '<a href="#">&larr; '.__('Previous',true).'</a>', array('tag'=>'li','class'=>'prev disabled', 'escape'=>false));?>
				<?=$this->Paginator->numbers(array('tag'=>'li','separator'=>'','disabled'=>'active'));?>
				<?=$this->Paginator->next(__('Next', true).' &rarr;', array('tag'=>'li','class'=>'next','escape'=>false), '<a href="#">'.__('Next', true).' &rarr;</a>', array('tag'=>'li','class' => 'next disabled', 'escape'=>false));?>
			</ul>
		</div>
		<div class="well">
			<?=$this->Html->link(__('New Picture', true), array('action' => 'add'), array('class'=>'btn primary')); ?>
		</div>
	</div>
</div>