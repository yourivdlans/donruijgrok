<?php
class AppController extends Controller
{
	var $helpers = array('AssetCompress.AssetCompress');
	
	function beforeRender()
	{
		if ( !isset($this->params['prefix']) )
		{
			$pages = $this->getMenu();
			$staticActions = $this->Page->staticActions;
			
			$this->set(compact('pages', 'staticActions'));
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