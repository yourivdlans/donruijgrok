<?php
class AppController extends Controller
{
	var $components = array('Auth', 'Session');
	var $title_for_layout = 'Don Ruijgrok';
	
	var $soundcloud_id = '191915';
	
	function __construct()
	{
		parent::__construct();
		
		// Globally include AssetCompress and Number helpers
		$this->helpers[] = 'AssetCompress.AssetCompress';
	}
	
	function beforeFilter()
	{
		$this->Auth->autoRedirect = false;
		
		$this->Auth->loginRedirect = array('admin' => true, 'controller' => 'dashboard', 'action' => 'index');
		$this->Auth->logoutRedirect = array('admin' => false, 'controller' => 'pages', 'action' => 'first');
	}
	
	function beforeRender()
	{
		// Front-end
		if ( !isset($this->params['prefix']) )
		{
			$title_for_layout = $this->title_for_layout;
			
			$pages = $this->getMenu();
			$staticActions = $this->Page->staticActions;
			
			$this->set(compact('title_for_layout', 'pages', 'staticActions'));
		}
		// Back-end
		else
		{
			$this->layout = 'admin';
			
			$menu = $this->getAdminMenu();
			
			$this->set(compact('menu'));
		}
	}
	
	function getMenu()
	{
		$this->loadModel('Page');
		
		$pages = $this->Page->find('all', array(
			'order' => 'position'
		));
		
		return $pages;
	}
	
	function getAdminMenu()
	{
		$controllers = array(
			'dashboard' => 'Dashboard',
			'pages' => 'Pages',
			'pictures' => 'Pictures',
			'bookings_dates' => 'Bookings & Dates'
		);
		
		return $controllers;
	}
}