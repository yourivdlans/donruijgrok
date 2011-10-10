<div class="pages view">
	<div><?=$page['Page']['content']?></div>
	<?php
	if ( $get_soundcloud_tracks === true )
	{
		?>
		<div id="soundcloud_players">
			<h3>Don's latest soundcloud tracks!</h3>
		</div>
		<?php
		echo $this->Html->scriptBlock('getSoundCloudTracks('.$soundcloud_id.')', array('inline' => false));
	}
	?>
</div>