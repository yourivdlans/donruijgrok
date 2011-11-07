<?php
class Picture extends AppModel {
	var $name = 'Picture';
	var $displayField = 'title';
	var $validate = array(
		'title' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Can not be empty'
			),
		)
	);
	
	var $actsAs = array('Media.Transfer', 'Media.Generator', 'Media.Coupler');
	
	var $virtualFields = array(
		'path' => "CONCAT_WS('/', dirname, basename)"
	);
	
	public function beforeDelete($cascade = true)
	{
		if (!$cascade)
		{
			return true;
		}

		$result = $this->find('first', array(
			'conditions' => array($this->primaryKey => $this->id),
			'fields'	 => array('dirname', 'basename'),
			'recursive'  => -1
		));
		
		if (empty($result))
		{
			return false;
		}

		$pattern  = MEDIA_FILTER . "*/";
		$pattern .= $result[$this->alias]['dirname'] . '/';
		$pattern .= pathinfo($result[$this->alias]['basename'], PATHINFO_FILENAME);

		$files = glob("{$pattern}.*");

		$name = Mime_Type::guessName($result[$this->alias]['basename']);
		$versions = array_keys(Configure::read('Media.filter.' . $name));

		if (count($files) > count($versions))
		{
			$message  = 'MediaFile::beforeDelete - ';
			$message .= "Pattern `{$pattern}` matched more than number of versions. ";
			$message .= "Failing deletion of versions and record for `Media@{$this->id}`.";
			CakeLog::write('warning', $message);
			return false;
		}

		foreach ($files as $file)
		{
			$File = new File($file);

			if (!$File->delete())
			{
				return false;
			}
		}
		
		return true;
	}
}