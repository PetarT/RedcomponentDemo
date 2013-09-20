<?php
/**
 * @package    DemoRedComponent
 * @copyright  (C) 2013 - Petar Tuovic - http://www.redcomponent.com
 * @license    GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
 * */

defined('_JEXEC') or die;

/**
 * View to edit an demo user.
 *
 * @package     RedcomponentDemo.Administrator
 * @subpackage  com_demo
 * @since       0.1
 */
class DemoViewDemouser extends JViewLegacy
{
	/**
	 * @var    JForm  JForm object with form data.
	 * @since  0.1
	 */
	protected $form;

	/**
	 * @var    object  Single item from table.
	 * @since  0.1
	 */
	protected $item;

	/**
	 * @var    object  State info.
	 * @since  0.1
	 */
	protected $state;

	/**
	 * Method to display a view.
	 *  
	 * @param   object  $tpl  Template to be shown
	 * 
	 * @return  bool    False on errors on display.
	 * 
	 * @since  0.1
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

		if ($isNew)
		{
			JToolbarHelper::apply('demouser.apply');
			JToolbarHelper::save('demouser.save');
			JToolbarHelper::save2new('demouser.save2new');
			JToolbarHelper::cancel('demouser.cancel');
		}
		else
		{
			JToolbarHelper::apply('demouser.apply');
			JToolbarHelper::save('demouser.save');
			JToolbarHelper::cancel('demouser.cancel', 'JTOOLBAR_CLOSE');
		}

		parent::display($tpl);
	}
}
