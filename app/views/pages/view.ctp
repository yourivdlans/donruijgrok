<div class="pages view">
	<div><?=$page['Page']['content']?></div>
	<?php
	if ( isset($soundcloud_tracks) )
	{
		echo $this->element('soundcloud_tracks');
	}
	?>
</div>