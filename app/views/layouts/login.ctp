<?=$html->docType('xhtml-trans');?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8">
	<title><?=$title_for_layout?></title>
	<meta name="author" content="ITflows">
	
	<?=$this->Html->css('bootstrap.min')?>
	<?=$this->Html->css('login')?>
	
	<?=$this->Html->meta('icon')?>
</head>

<body>

	<div id="container">
		<div id="logo-container">
			<div id="block"></div>
			<div id="logo"></div>
		</div>
		<div id="content">
			<?=$content_for_layout?>
		</div>
	</div>

</body>
</html>