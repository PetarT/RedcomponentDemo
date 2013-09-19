<?php
/**
 * @package Demo - Adminstrator
 * @Copyright (C) 2013 - Petar Tuovic - http://www.redcomponent.com
 * @All rights reserved
 * @license under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
 * */

class DemoTableDemo extends JTable {
	var $id;
	var $registerDate;
	var $username;
	var $name;
	var $password;
	
	public function __construct(&$_db) {
		parent::__construct("#__demo", "id", $_db);
	}
	
	/**
	 * Stores a demouser
	 *
	 * @param   boolean	True to update fields even if they are null.
	 *
	 * @return  boolean True on success, false on failure.
	 *
	 */
	public function store($updateNulls = false)
	{
		$date	= JFactory::getDate();
		$user	= JFactory::getUser();
	
		if (!$this->id)
		{
			$this->registerDate = $date->toSql();
		}
	
		return parent::store($updateNulls);
	}
}