var soundcloud_player_tmpl =
	'<div class="soundcloud_player">' +
		'<div class="title">{soundcloud_title}</div>' +
		'<object height="81" width="100%" id="donPlayer" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000">' +
			'<param name="movie" value="http://player.soundcloud.com/player.swf?url={soundcloud_uri}&enable_api=true&object_id=donPlayer"></param>' +
			'<param name="allowscriptaccess" value="always"></param>' +
			'<embed allowscriptaccess="always" height="81" src="http://player.soundcloud.com/player.swf?url={soundcloud_uri}&enable_api=true&object_id=donPlayer" type="application/x-shockwave-flash" width="100%" name="donPlayer"></embed>' +
		'</object>' +
	'</div>';

function getSoundCloudTracks(soundcloud_id){
	$.get('/pages/getLatestSoundcloudTracks/'+soundcloud_id+'.json', null, function(json){
		$.each(json, function(index, value){
			soundcloud_player = soundcloud_player_tmpl;
			
			soundcloud_player = soundcloud_player.replace(/\{soundcloud_title\}/gi, value.title);
			soundcloud_player = soundcloud_player.replace(/\{soundcloud_uri\}/gi, value.uri);
			
			$('#soundcloud_players').append(soundcloud_player);
		});
	}, 'json');
}