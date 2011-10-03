<div class="pictures index">
	<?php
	foreach ( $pictures as $picture )
	{
		?>
		<div class="picture">
			<?=$this->Html->image($picturesPath . $picture['Picture']['thumb'])?>
		</div>
		<?php
	}
	?>
</div>