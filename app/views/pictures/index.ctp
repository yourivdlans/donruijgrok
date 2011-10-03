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
				$this->Html->image($picturesPath . $picture['Picture']['thumb']),
				$picturesPath . $picture['Picture']['filename'],
				$htmlOptions
			)?>
		</div>
		<?php
	}
	?>
</div>