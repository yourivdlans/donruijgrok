<?php
class SitemapsController extends AppController
{
	var $name = 'Sitemaps';
	var $uses = array('Page');
	var $helpers = array('Html', 'Time'); 
	var $components = array('RequestHandler');
	
	function beforeFilter()
	{
		$this->Auth->allow('index');
	}
	
	function index()
	{
		Configure::write ('debug', 0); 
		
		$first = $this->Page->findByPosition(0);
		$pages = $this->Page->find('all');
		
		$this->set(compact('first', 'pages'));
	}
}