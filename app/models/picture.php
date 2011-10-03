<?php
class Picture extends AppModel {
	var $name = 'Picture';
	var $displayField = 'title';
	var $validate = array(
		'title' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'filename' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	
	var $picturesPath = '/img/pictures/';
	
	function afterFind($results)
	{
		if(!Set::numeric(array_keys($results)))
		{
			$results = array($results);
		}
		
		foreach ( $results as &$result )
		{
			$result['Picture']['thumb'] = $this->getThumbnailFromFilename($result['Picture']['filename']);
		}
		
		return $results;
	}
	
	function getThumbnailFromFilename($filename)
	{
		$pInfo = pathinfo($filename);
		$thumb = $pInfo['filename'].'_thumb.'.strtolower($pInfo['extension']);
		
		return $thumb;
	}
}