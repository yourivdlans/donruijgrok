<div id="menu">
<?php
foreach ( $pages as $page )
{
	if ( isset($staticActions[$page['Page']['slug']]) )
	{
		$url = $staticActions[$page['Page']['slug']];
	}
	else
	{
		$url = array(
			'controller' => 'pages',
			'action' => 'view',
			'id' => $page['Page']['id'],
			'slug' => '-' . $page['Page']['slug']
		);
	}
	
	$htmlOptions = array('class' => 'item');
	
	if ( isset($this->params['id']) AND $page['Page']['id'] == $this->params['id'] )
	{
		$htmlOptions['class'] .= ' active';
	}
	else if ( $page['Page']['slug'] == $this->params['controller'] )
	{
		$htmlOptions['class'] .= ' active';
	}
	
	echo $this->Html->link(
		$page['Page']['title'],
		$url,
		$htmlOptions
	);
}
?>
</div>