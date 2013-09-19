<?php
/**
 * @package Demo - Adminstrator
 * @Copyright (C) 2013 - Petar Tuovic - http://www.redcomponent.com
 * @All rights reserved
 * @license under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
 * */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

class DemoControllerDemouser extends JControllerForm {
	
	protected $extension;

	public function __construct($config = array()) {
		parent::__construct($config);
	}
}