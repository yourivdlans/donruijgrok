<?=$html->docType('xhtml-trans');?>

<html xmlns="http://www.w3.org/1999/xhtml">
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>		<html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>		<html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">

	<!-- Use the .htaccess and remove these lines to avoid edge case issues.
			 More info: h5bp.com/b/378 -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?=$title_for_layout?></title>
	<meta name="description" content="Don Ruijgrok a techno dj from holland, winner of vinylized 2011">
	<meta name="author" content="ITflows">
	
	<?=$this->Html->meta('icon')?>
	
	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

	<!-- CSS: implied media=all -->
	<!-- CSS concatenated and minified via ant build script-->
	<?=$this->AssetCompress->css('default')?>
	
	<!-- end CSS-->

	<!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->
	<meta name="application-name" content="Don Ruijgrok" />
	<meta name="msapplication-tooltip" content="Don Ruijgrok, a dutch techno artist." />

	<!-- All JavaScript at the bottom, except for Modernizr / Respond.
			 Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
			 For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
	<?=$this->Html->script('libs/modernizr-2.0.6.min')?>
	
</head>

<body>

	<div id="container">
	
		<div id="logo-container">
			<div id="block"></div>
			<div id="logo"></div>
		</div>
		
		<?=$this->element('front_end_menu')?>
		
		<div id="main" role="main">
			<?=$content_for_layout?>
		</div>
		<div id="footer">
			<div id="left">
				Created by <a target="_blank" href="http://www.itflows.nl">ITflows</a>
			</div>
			<div id="right">
				<div>
					<a target="_blank" href="mailto:&#105;&#110;&#102;&#111;&#064;&#100;&#111;&#110;&#114;&#117;&#105;&#106;&#103;&#114;&#111;&#107;&#046;&#099;&#111;&#109;">
						&#105;&#110;&#102;&#111;&#064;&#100;&#111;&#110;&#114;&#117;&#105;&#106;&#103;&#114;&#111;&#107;&#046;&#099;&#111;&#109;
					</a>
				</div>
				<div>
					<?=$this->Html->link(
						$this->Html->image('icons/beatport_16.png'),
						'http://www.beatport.com/artist/don-ruijgrok/132174',
						array(
							'escape' => false,
							'target' => '_blank'
						)
					)?>
				</div>
				<div>
					<?=$this->Html->link(
						$this->Html->image('icons/facebook_16.png'),
						'http://www.facebook.com/donruijgrok',
						array(
							'escape' => false,
							'target' => '_blank'
						)
					)?>
				</div>
				<div>
					<?=$this->Html->link(
						$this->Html->image('icons/soundcloud_16.png'),
						'http://www.soundcloud.com/donruijgrok',
						array(
							'escape' => false,
							'target' => '_blank'
						)
					)?>
				</div>
				<div>
					<?=$this->Html->link(
						$this->Html->image('icons/twitter_16.png'),
						'http://www.twitter.com/donruijgrok',
						array(
							'escape' => false,
							'target' => '_blank'
						)
					)?>
				</div>
			</div>
		</div>
	</div> <!--! end of #container -->


	<!-- JavaScript at the bottom for fast page loading -->
	
	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>


	<!-- scripts concatenated and minified via ant build script-->
	<?=$this->AssetCompress->script('default')?>
	<script type="text/javascript"> Cufon.now(); </script>
	<?=$scripts_for_layout?>
	<!-- end scripts-->

	
	<!-- Change UA-XXXXX-X to be your site's ID -->
	<script>
		window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
		Modernizr.load({
			load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
		});
	</script>


	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
			 chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7 ]>
		<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->
	
</body>
</html>