<?php
/**
 * Demo - Adminstrator
 * @Copyright (C) 2013 - Petar Tuovic - http://www.redcomponent.com
 * @All rights reserved
 * @license under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
 * */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

class DemoControllerDemousers extends JControllerAdmin {
	
	public function __construct($config = array()) {
		if (empty($this->extension))
		{
			$this->extension = JFactory::getApplication()->input->get('extension', 'com_demo');
		}
		parent::__construct($config);
	}
	
	public function display($cachable = false, $urlparams = false)
	{
		$view   = JFactory::getApplication()->input->set('view', 'demousers');
		$layout = JFactory::getApplication()->input->set('layout', 'default');
		parent::display();
		return $this;
	}

	public function getModel($name = 'Demouser', $prefix = 'DemoModel', $config = array('ignore_request' => true)) {
		$model = parent::getModel($name, $prefix, $config);
		return $model;
	}

}