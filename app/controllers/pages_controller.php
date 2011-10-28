<?php
class PagesController extends AppController
{
	var $name = 'Pages';
	var $components = array('RequestHandler');
	var $helpers = array('Html', 'Form', 'Time', 'PaginatorExtended');
	
	function beforeFilter()
	{
		parent::beforeFilter();
		
		$this->Auth->allow('first', 'view', 'getLatestSoundcloudTracks');
	}
	
	function first()
	{
		$page = $this->Page->find('first', array(
			'order' => 'position ASC'
		));
		
		$get_soundcloud_tracks = true;
		$soundcloud_id = $this->soundcloud_id;
		
		$this->set(compact('page', 'get_soundcloud_tracks', 'soundcloud_id'));
		
		$this->render('view');
	}

	function view($id = null)
	{
		if (!$id)
		{
			$this->Session->setFlash(__('Invalid page', true));
			$this->redirect(array('action' => 'index'));
		}
		
		$page = $this->Page->read(null, $id);
		
		$get_soundcloud_tracks = false;
		$soundcloud_id = $this->soundcloud_id;
		
		if ( $page['Page']['slug'] == 'home' )
		{
			$get_soundcloud_tracks = true;
		}
		
		$this->title_for_layout .= ' - ' . $page['Page']['title'];
		
		$this->set(compact('page', 'get_soundcloud_tracks', 'soundcloud_id'));
	}
	
	function getLatestSoundcloudTracks($soundcloud_user_id, $limit=2)
	{
		$this->autoRender = false;
		
		if ( $this->RequestHandler->isAjax() === false ) return false;
		
		$this->RequestHandler->setContent('json', 'text/x-json');
		
		App::import('Vendor', 'Soundcloud', array('file' => 'soundcloud' . DS . 'Services' . DS . 'Soundcloud.php'));
		
		$soundcloud = new Services_Soundcloud(Configure::read('soundcloud_client_id'), Configure::read('soundcloud_client_secret'));
		$soundcloud->setCurlOptions(array(
			CURLOPT_CAINFO => APP . 'vendors' . DS . 'cacert.pem'
		));
		
		$json = $soundcloud->get('users/'.$soundcloud_user_id.'/tracks', array('limit' => $limit));
		
		return $json;
	}

	function admin_index()
	{
		$this->paginate = array(
			'order' => 'position'
		);
		
		$this->set('pages', $this->paginate());
	}

	function admin_add()
	{
		if (!empty($this->data))
		{
			$this->Page->create();
			if ($this->Page->save($this->data))
			{
				$this->Session->setFlash(__('The page has been saved', true), 'flash_success');
				$this->redirect(array('action' => 'index'));
			}
			else
			{
				$this->Session->setFlash(__('The page could not be saved. Please, try again.', true), 'flash_error');
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
				$this->Session->setFlash(__('The page has been saved', true), 'flash_success');
				$this->redirect(array('action' => 'index'));
			}
			else
			{
				$this->Session->setFlash(__('The page could not be saved. Please, try again.', true), 'flash_error');
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
			$this->Session->setFlash(__('Page deleted', true), 'flash_success');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Page was not deleted', true), 'flash_error');
		$this->redirect(array('action' => 'index'));
	}
}