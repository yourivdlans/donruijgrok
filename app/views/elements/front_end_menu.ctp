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
	
	echo $this->Html->link(
		$page['Page']['title'],
		$url,
		array('class' => 'item')
	);
}
?>
</div>