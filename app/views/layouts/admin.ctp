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
					<?php
					foreach ( $menu as $controller => $controllerName )
					{
						$active = ( $this->params['controller'] == $controller ? ' class="active"' : null );
						
						echo '<li'.$active.'>'.$this->Html->link($controllerName, array('controller' => $controller, 'action' => 'index')).'</li>';
					}
					?>
				</ul>
				<ul class="nav secondary-nav">
					<li><?=$this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout', 'admin' => false))?></li>
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