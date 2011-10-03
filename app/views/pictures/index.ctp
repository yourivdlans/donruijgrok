<div class="pictures index">
	<?php
	foreach ( $pictures as $picture )
	{
		?>
		<div class="picture">
			<?=$this->Html->link(
				$this->Html->image($picturesPath . $picture['Picture']['thumb']),
				$picturesPath . $picture['Picture']['filename'],
				array('escape' => false)
			)?>
		</div>
		<?php
	}
	?>
</div>