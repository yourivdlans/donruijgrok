<?php
class BookingsDate extends AppModel
{
	var $name = 'BookingsDate';
	var $displayField = 'date';
	var $validate = array(
		'date' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => 'Must be a date'
			)
		),
		'location' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Can not be empty'
			)
		),
		'venue' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Can not be empty'
			)
		)
	);
}