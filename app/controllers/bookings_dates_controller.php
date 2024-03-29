<?php
class BookingsDatesController extends AppController
{
	var $name = 'BookingsDates';
	var $helpers = array('Html', 'Form', 'Time', 'PaginatorExtended');
	
	function beforeFilter()
	{
		parent::beforeFilter();
		
		$this->Auth->allow('index');
	}
	
	function index()
	{
		$bookingsDates = $this->BookingsDate->find('all', array(
			'conditions' => array(
				'date >=' => date('Y-m-d')
			),
			'order' => 'date'
		));
		
		$this->set(compact('bookingsDates'));
	}

	function admin_index()
	{
		$this->paginate = array(
			'order' => 'date'
		);
		
		$this->set('bookingsDates', $this->paginate());
	}

	function admin_add()
	{
		if (!empty($this->data))
		{
			$this->BookingsDate->create();
			if ($this->BookingsDate->save($this->data))
			{
				$this->Session->setFlash(__('The bookings date has been saved', true), 'flash_success');
				$this->redirect(array('action' => 'index'));
			}
			else
			{
				$this->Session->setFlash(__('The bookings date could not be saved. Please, try again.', true), 'flash_error');
			}
		}
	}

	function admin_edit($id = null)
	{
		if (!$id && empty($this->data))
		{
			$this->Session->setFlash(__('Invalid bookings date', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data))
		{
			if ($this->BookingsDate->save($this->data))
			{
				$this->Session->setFlash(__('The bookings date has been saved', true), 'flash_success');
				$this->redirect(array('action' => 'index'));
			}
			else
			{
				$this->Session->setFlash(__('The bookings date could not be saved. Please, try again.', true), 'flash_error');
			}
		}
		if (empty($this->data))
		{
			$this->data = $this->BookingsDate->read(null, $id);
		}
	}

	function admin_delete($id = null)
	{
		if (!$id)
		{
			$this->Session->setFlash(__('Invalid id for bookings date', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->BookingsDate->delete($id))
		{
			$this->Session->setFlash(__('Bookings date deleted', true), 'flash_success');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Bookings date was not deleted', true), 'flash_error');
		$this->redirect(array('action' => 'index'));
	}
}