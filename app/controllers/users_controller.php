<?php
class UsersController extends AppController
{
	var $name = 'Users';
	
	function beforeRender()
	{
		parent::beforeRender();
		
		if ( $this->params['action']['admin_login'] )
		{
			$this->layout = 'login';
		}
	}
	
	function admin_login()
	{
		if ($this->Auth->user())
		{
			$this->redirect($this->Auth->redirect());
		}
	}
	
	function logout()
	{
		$this->redirect($this->Auth->logout());
	}
}