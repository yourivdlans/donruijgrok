<?php
class PicturesController extends AppController
{
	var $name = 'Pictures';
	var $helpers = array('Time');

	function beforeFilter()
	{
		$this->Auth->allow('index');
	}
	
	function index()
	{
		$pictures = $this->Picture->find('all');
		
		$this->set(compact('pictures'));
	}
	
	function admin_index()
	{
		$this->set('pictures', $this->paginate());
	}

	function admin_add()
	{
		if (!empty($this->data))
		{
			$this->Picture->create();
			if ($this->Picture->save($this->data))
			{
				$this->Session->setFlash(__('The picture has been saved', true), 'flash_success');
				$this->redirect(array('action' => 'index'));
			}
			else
			{
				$this->Session->setFlash(__('The picture could not be saved. Please, try again.', true), 'flash_error');
			}
		}
	}

	function admin_delete($id = null)
	{
		if (!$id)
		{
			$this->Session->setFlash(__('Invalid id for picture', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Picture->delete($id))
		{
			$this->Session->setFlash(__('Picture deleted', true), 'flash_success');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Picture was not deleted', true), 'flash_error');
		$this->redirect(array('action' => 'index'));
	}
}