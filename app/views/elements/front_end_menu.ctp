<div id="menu">
<?php
$i = 1;
$c = count($pages);
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
	else if ( $page['Page']['slug'] == 'home' AND $this->params['action'] == 'first' )
	{
		$htmlOptions['class'] .= ' active';
	}
	
	if ( $c == $i )
	{
		$htmlOptions['class'] .= ' last';
	}
	
	echo '<div class="item-wrapper">';
	
	echo $this->Html->link(
		$page['Page']['title'],
		$url,
		$htmlOptions
	);
	
	echo '</div>';
	
	$i++;
}
?>
</div>