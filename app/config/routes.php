<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app.config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/views/pages/home.ctp)...
 */
	Router::parseExtensions('json', 'xml');
	
	Router::connect('/sitemap', array('controller' => 'sitemaps', 'action' => 'index'));
	
	Router::connect('/', array('controller' => 'pages', 'action' => 'first'));
	Router::connect('/admin', array('controller' => 'users', 'action' => 'login', 'admin' => true));
	Router::connect('/logout', array('controller' => 'users', 'action' => 'logout'));
	
	Router::connect(
		'/pages/:id:slug',
		array(
			'controller' => 'pages',
			'action' => 'view'
		),
		array(
			'pass' => array('id'),
			'id' => '[0-9]+',
			'slug' => '-.*?'
		)
	);