<div class="pictures index">
	<?php
	foreach ( $pictures as $picture )
	{
		$htmlOptions = array(
			'escape' => false,
			'class' => 'fancybox',
			'rel' => 'donruijgrok'
		);
		
		if ( !empty($picture['Picture']['title']) )
		{
			$htmlOptions['title'] = $picture['Picture']['title'];
		}
		
		?>
		<div class="picture">
			<?=$this->Html->link(
				$this->Html->image('/media/filter/s/' . $picture['Picture']['dirname'] . '/' . $picture['Picture']['basename']),
				'/media/filter/l/' . $picture['Picture']['dirname'] . '/' . $picture['Picture']['basename'],
				$htmlOptions
			)?>
		</div>
		<?php
	}
	?>
</div>