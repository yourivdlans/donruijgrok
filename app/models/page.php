<?php
class Page extends AppModel
{
	var $name = 'Page';
	var $displayField = 'title';
	var $validate = array(
		'title' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Can not be empty'
			),
		),
		'content' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Can not be empty'
			),
		),
		'position' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Should be numeric'
			),
		),
	);
	
	public $staticActions = array(
		'pictures' => array(
			'controller' => 'pictures'
		),
		'bookings_dates' => array(
			'controller' => 'bookings_dates'
		)
	);
}
?>