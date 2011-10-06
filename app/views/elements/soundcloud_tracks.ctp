<?php
$soundcloud_tracks = json_decode($soundcloud_tracks);
?>

<div id="soundcloud_players">
	<h3>Don's latest soundcloud tracks!</h3>
<?php
foreach ( $soundcloud_tracks as $soundcloud_track )
{
	?>
	<div class="soundcloud_player">
		<div class="title"><?=$soundcloud_track->title?></div>
		<object height="81" width="100%" id="donPlayer" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000">
		  <param name="movie" value="http://player.soundcloud.com/player.swf?url=<?=$soundcloud_track->uri?>&enable_api=true&object_id=donPlayer"></param>
		  <param name="allowscriptaccess" value="always"></param>
		  <embed allowscriptaccess="always" height="81" src="http://player.soundcloud.com/player.swf?url=<?=$soundcloud_track->uri?>&enable_api=true&object_id=donPlayer" type="application/x-shockwave-flash" width="100%" name="donPlayer"></embed>
		</object>
	</div>
	<?php
}
?>
</div>