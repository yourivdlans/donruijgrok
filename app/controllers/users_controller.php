<?php
class UsersController extends AppController
{
	var $name = 'Users';
	
	function admin_login()
	{
		$this->layout = 'login';
	}
	
	function logout()
	{
		$this->redirect($this->Auth->logout());
	}
}