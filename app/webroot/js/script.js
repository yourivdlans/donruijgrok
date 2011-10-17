/* Author: 

*/



Cufon.replace('#menu .item', {
	hover: true,
	fontSize: '24px'
});

$(document).ready(function() {
	$('a.fancybox').fancybox({
		titleShow: true,
		transitionIn: 'elastic',
		transitionOut: 'elastic'
	});
	
	$('#menu .item').css('padding', '10px 10px 4px');
});