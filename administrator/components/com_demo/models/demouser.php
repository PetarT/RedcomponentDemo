<?php
/**
 * @package    DemoRedComponent
 * @copyright  (C) 2013 - Petar Tuovic - http://www.redcomponent.com
 * @license    GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
 * */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

/**
 * Demouser model class for the DemoRedComponent package.
 *
 * @package     Redcomponent.Administrator
 * @subpackage  com_demo
 * @since       0.1
 *
 */
class DemoModelDemouser extends JModelAdmin
{
	/**
	 * Returns a Table object, always creating it
	 *
	 * @param   string  $type    The table type to instantiate
	 * @param   string  $prefix  A prefix for the table class name. Optional.
	 * @param   array   $config  Configuration array for model. Optional.
	 *
	 * @return  JTable  A database object
	 * 
	 * @since   0.1
	 */
	public function getTable($type = 'Demo', $prefix = 'DemoTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}

	/**
	 * Method to get the row form.
	 *
	 * @param   array    $data      Data for the form.
	 * @param   boolean  $loadData  True if the form is to load its own data (default case), false if not.
	 *
	 * @return  mixed    A JForm object on success, false on failure
	 * 
	 * @since   0.1
	 */
	public function getForm($data = array(), $loadData = true)
	{
		// Get the form.
		$form = $this->loadForm('com_demo.demouser', 'demouser', array('control' => 'jform', 'load_data' => $loadData));

		if (empty($form))
		{
			return false;
		}

		return $form;
	}

	/**
	 * Method to get single item.
	 *
	 * @param   int  $pk  Primary key, id for table
	 *
	 * @return  mixed  A JForm object on success, false on failure
	 *
	 * @since   0.1
	 */
	public function getItem($pk = null)
	{
		$item = parent::getItem($pk);

		return $item;
	}

	/**
	 * Method to get the data that should be injected in the form.
	 *
	 * @return  mixed  The data for the form.
	 * 
	 * @since   0.1
	 */
	protected function loadFormData()
	{
		// Check the session for previously entered form data.
		$data = JFactory::getApplication()->getUserState('com_demo.edit.demouser.data', array());

		if (empty($data))
		{
			$data = $this->getItem();
		}

		$this->preprocessData('com_demo.demouser', $data);

		return $data;
	}
}
