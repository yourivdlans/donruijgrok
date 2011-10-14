<?='<?xml version="1.0" encoding="UTF-8"?>'?>
<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
	
	<url>
		<loc><?=$this->Html->url('/', true)?></loc>
		<lastmod><?=$this->Time->toAtom($first['Page']['modified'])?></lastmod>
		<changefreq>monthly</changefreq>
	</url>
<?php
foreach ( $pages as $page )
{
	if ( isset($staticActions[$page['Page']['slug']]) )
	{
		$url_options = $staticActions[$page['Page']['slug']];
	}
	else
	{
		$url_options = array(
			'controller' => 'pages',
			'action' => 'view',
			'id' => $page['Page']['id'],
			'slug' => '-' . $page['Page']['slug']
		);
	}
	
	$url = $this->Html->url($url_options, true);
	
	?>
	<url>
		<loc><?=$url?></loc>
		<lastmod><?=$this->Time->toAtom($first['Page']['modified'])?></lastmod>
		<changefreq>monthly</changefreq>
	</url>
	<?php
}
?>

</urlset>