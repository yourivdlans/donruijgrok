<?php
class BookingsDate extends AppModel
{
	var $name = 'BookingsDate';
	var $displayField = 'date';
	var $validate = array(
		'date' => array(
			'date' => array(
				'rule' => array('date')
			)
		),
		'location' => array(
			'notempty' => array(
				'rule' => array('notempty')
			)
		),
		'venue' => array(
			'notempty' => array(
				'rule' => array('notempty')
			)
		)
	);
}