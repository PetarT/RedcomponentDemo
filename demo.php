<?php
/**
 * Demo - Adminstrator
 * @Copyright (C) 2013 - Petar Tuovic - http://www.redcomponent.com
 * @All rights reserved
 * @license under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
 * */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

$input = JFactory::getApplication()->input;

$task = $input->get('task');

$controller = JControllerLegacy::getInstance('Demo');
$controller->execute($input->get('task'));
$controller->redirect();