<?php
class PicturesController extends AppController
{
	var $name = 'Pictures';

	function index()
	{
		$this->set('pictures', $this->paginate());
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
				$this->Session->setFlash(__('The picture has been saved', true));
				$this->redirect(array('action' => 'index'));
			}
			else
			{
				$this->Session->setFlash(__('The picture could not be saved. Please, try again.', true));
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
			$this->Session->setFlash(__('Picture deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Picture was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}