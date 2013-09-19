<?php
/**
 * @package     RedcomponentDemo.Administrator
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * View to edit an demo user.
 *
 * @package     RedcomponentDemo.Administrator
 * @subpackage  com_demo
 */

class DemoViewDemousers extends JViewLegacy {
	protected $items;
	protected $pagination;
	protected $state;
	
	/**
	 * Display the view
	 */
	public function display($tpl = null)
	{
		$this->state		= $this->get('State');
		$this->items		= $this->get('Items');
		$this->pagination	= $this->get('Pagination');
	
		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode("\n", $errors));
			return false;
		}
		
		JToolbarHelper::title("DemoUsers", 'generic.png');
		
		$bar = JToolBar::getInstance('toolbar');
		JToolbarHelper::addNew('demouser.add');
		JToolbarHelper::editList('demouser.edit');
		JToolbarHelper::deleteList('', 'demousers.delete', 'JTOOLBAR_DELETE');
		
		parent::display($tpl);
	}
	
	protected function getSortFields()
	{
		return array(
			'a.id' => JText::_('COM_DEMO_ID'),
			'a.name' => JText::_('COM_DEMO_NAME'),
			'a.username' => JText::_('COM_DEMO_USERNAME'),
			'email' => JText::_('COM_DEMO_EMAIL'),
			'registerDate' => JText::_('COM_DEMO_REGISTER_DATE')
		);
	}
}