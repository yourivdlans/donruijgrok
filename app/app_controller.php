<?php
class AppController extends Controller
{
	var $helpers = array('AssetCompress.AssetCompress');
	var $title_for_layout = 'Don Ruijgrok';
	
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
}