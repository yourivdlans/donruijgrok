<?php
class PagesController extends AppController
{
	var $name = 'Pages';
	
	function beforeFilter()
	{
		$this->Auth->allow('first', 'view');
	}
	
	function first()
	{
		$page = $this->Page->find('first', array(
			'order' => 'position ASC'
		));
		
		$soundcloud_tracks = $this->getLatestSoundcloudTracks('191915');
		
		$this->set(compact('page', 'soundcloud_tracks'));
		
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
		
		if ( $page['Page']['slug'] == 'home' )
		{
			$soundcloud_tracks = $this->getLatestSoundcloudTracks('191915');
			
			$this->set('soundcloud_tracks', $soundcloud_tracks);
		}
		
		$this->title_for_layout .= ' - ' . $page['Page']['title'];
		
		$this->set(compact('page'));
	}
	
	function getLatestSoundcloudTracks($soundcloud_user_id, $limit=2)
	{
		App::import('Vendor', '/soundcloud/Services/Soundcloud');
		
		$soundcloud = new Services_Soundcloud(Configure::read('soundcloud_client_id'), Configure::read('soundcloud_client_secret'));
		$soundcloud->setCurlOptions(array(
			CURLOPT_CAINFO => APP . 'vendors' . DS . 'cacert.pem'
		));
		
		$json = $soundcloud->get('users/'.$soundcloud_user_id.'/tracks', array('limit' => $limit));
		
		return $json;
	}

	function admin_index()
	{
		$this->set('pages', $this->paginate());
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