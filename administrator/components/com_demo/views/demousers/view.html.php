<?php
/**
 * @package    DemoRedComponent
 * @copyright  (C) 2013 - Petar Tuovic - http://www.redcomponent.com
 * @license    GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
 * */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die;

/**
 * View to show demousers list.
 *
 * @package     RedcomponentDemo.Administrator
 * @subpackage  com_demo
 * @since       0.1
 */
class DemoViewDemousers extends JViewLegacy
{
	/**
	 * @var    array  List of table demousers items.
	 * @since  0.1
	 */
	protected $items;

	/**
	 * @var    int  Pagination number.
	 * @since  0.1
	 */
	protected $pagination;

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

	/**
	 * Method to sort fileds in list.
	 *
	 * @return  array  Sorted field list.
	 *
	 * @since  0.1
	 */
	protected function getSortFields()
	{
		$sortedFields = array(
			'a.id' => JText::_('COM_DEMO_ID'),
			'a.name' => JText::_('COM_DEMO_NAME'),
			'a.username' => JText::_('COM_DEMO_USERNAME'),
			'email' => JText::_('COM_DEMO_EMAIL'),
			'registerDate' => JText::_('COM_DEMO_REGISTER_DATE')
		);

		return $sortedFields;
	}
}
