<?php
class AppModel extends Model
{
	var $actsAs = array('Containable');
	var $recursive = -1;
	
	/**
	 * Creates a slug for models that have one.
	 *
	 * @return bool true
	 */
	function beforeSave()
	{
		$this->createSlug();
		
		return true;
	}
	
	/**
	 * Create slug based on title
	 *
	 */
	private function createSlug()
	{
		if ( $this->hasField('slug') AND key_exists('title', $this->data[$this->name]) )
		{
			$this->data[$this->name]['slug'] = strtolower(Inflector::slug($this->data[$this->name]['title']));
		}
	}
}