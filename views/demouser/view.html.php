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

class DemoViewDemouser extends JViewLegacy {
	
	protected $form;	
	protected $item;
	protected $state;
	
	/**
	 * Display the view
	 */
	public function display($tpl = null)
	{
		// Initialise variables.
		$this->form	= $this->get('Form');
		$this->item	= $this->get('Item');
		$this->state = $this->get('State');
		$user = JFactory::getUser();
		$userId	= $user->get('id');
		
		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode("\n", $errors));
			return false;
		}
		
		JFactory::getApplication()->input->set('hidemainmenu', true);
		$isNew = ($this->item->id == 0);
		if($isNew) {
			JToolbarHelper::apply('demouser.apply');
			JToolbarHelper::save('demouser.save');
			JToolbarHelper::save2new('demouser.save2new');
			JToolbarHelper::cancel('demouser.cancel');
		} else {
			JToolbarHelper::apply('demouser.apply');
			JToolbarHelper::save('demouser.save');
			JToolbarHelper::cancel('demouser.cancel', 'JTOOLBAR_CLOSE');
		}		
		
		parent::display($tpl);
	}
}