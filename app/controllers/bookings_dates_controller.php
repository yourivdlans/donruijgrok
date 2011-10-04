<?php
class BookingsDatesController extends AppController
{
	var $name = 'BookingsDates';
	var $helpers = array('Html', 'Time');

	function index()
	{
		$bookingsDates = $this->BookingsDate->find('all', array(
			'order' => 'date'
		));
		
		$this->set(compact('bookingsDates'));
	}

	function admin_index()
	{
		$this->set('bookingsDates', $this->paginate());
	}

	function admin_view($id = null)
	{
		if (!$id)
		{
			$this->Session->setFlash(__('Invalid bookings date', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('bookingsDate', $this->BookingsDate->read(null, $id));
	}

	function admin_add()
	{
		if (!empty($this->data))
		{
			$this->BookingsDate->create();
			if ($this->BookingsDate->save($this->data))
			{
				$this->Session->setFlash(__('The bookings date has been saved', true));
				$this->redirect(array('action' => 'index'));
			}
			else
			{
				$this->Session->setFlash(__('The bookings date could not be saved. Please, try again.', true));
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
				$this->Session->setFlash(__('The bookings date has been saved', true));
				$this->redirect(array('action' => 'index'));
			}
			else
			{
				$this->Session->setFlash(__('The bookings date could not be saved. Please, try again.', true));
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
			$this->Session->setFlash(__('Bookings date deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Bookings date was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}