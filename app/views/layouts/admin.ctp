<?=$html->docType('xhtml-trans');?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8">
	<title><?=$title_for_layout?></title>
	<meta name="author" content="ITflows">
	
	<?=$this->Html->css('bootstrap.min')?>
	<?=$this->Html->css('admin')?>
	
	<?=$this->Html->meta('icon')?>
</head>

<body>
	<div class="topbar">
		<div class="fill">
			<div class="container">
				<a href="#" class="brand">Don Ruijgrok</a>
				<ul class="nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="container">
	
		<div class="content">
			<?=$content_for_layout?>
		</div>
		
		<footer>
		<p>&copy; ITflows 2011</p>
		</footer>
	
	</div>

</body>
</html>