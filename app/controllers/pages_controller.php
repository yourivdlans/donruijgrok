<?php
class PagesController extends AppController
{
	var $name = 'Pages';
	
	function first()
	{
		$page = $this->Page->find('first', array(
			'order' => 'position ASC'
		));
		
		$this->set('page', $page);
		
		$this->render('view');
	}

	function index()
	{
		$this->set('pages', $this->paginate());
	}

	function view($id = null)
	{
		if (!$id)
		{
			$this->Session->setFlash(__('Invalid page', true));
			$this->redirect(array('action' => 'index'));
		}
		
		$page = $this->Page->read(null, $id);
		
		$this->title_for_layout .= ' - ' . $page['Page']['title'];
		
		$this->set(compact('page'));
	}

	function admin_index()
	{
		$this->set('pages', $this->paginate());
	}

	function admin_view($id = null)
	{
		if (!$id)
		{
			$this->Session->setFlash(__('Invalid page', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('page', $this->Page->read(null, $id));
	}

	function admin_add()
	{
		if (!empty($this->data))
		{
			$this->Page->create();
			if ($this->Page->save($this->data))
			{
				$this->Session->setFlash(__('The page has been saved', true));
				$this->redirect(array('action' => 'index'));
			}
			else
			{
				$this->Session->setFlash(__('The page could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null)
	{
		if (!$id && empty($this->data))
		{
			$this->Session->setFlash(__('Invalid page', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data))
		{
			if ($this->Page->save($this->data))
			{
				$this->Session->setFlash(__('The page has been saved', true));
				$this->redirect(array('action' => 'index'));
			}
			else
			{
				$this->Session->setFlash(__('The page could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data))
		{
			$this->data = $this->Page->read(null, $id);
		}
	}

	function admin_delete($id = null)
	{
		if (!$id)
		{
			$this->Session->setFlash(__('Invalid id for page', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Page->delete($id))
		{
			$this->Session->setFlash(__('Page deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Page was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}