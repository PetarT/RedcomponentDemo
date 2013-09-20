<?php
/**
 * @package    DemoRedComponent
 * @copyright  (C) 2013 - Petar Tuovic - http://www.redcomponent.com
 * @license    GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
 * */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

/**
 * Demousers controller class for the DemoRedComponent package.
 *
 * @package     Redcomponent.Administrator
 * @subpackage  com_demo
 * @since       0.1
 *
 */

class DemoControllerDemousers extends JControllerAdmin
{
	/**
	 * Constructor.
	 *
	 * @param   array  $config  An optional associative array of configuration settings.
	 *
	 * @see     JController
	 * @since   0.1
	 */
	public function __construct($config = array())
	{
		if (empty($this->extension))
		{
			$this->extension = JFactory::getApplication()->input->get('extension', 'com_demo');
		}

		parent::__construct($config);
	}

	/**
	 * Method to display a view.
	 *  
	 * @param   boolean  $cachable   If true, the view output will be cached  
	 * 
	 * @param   array    $urlparams  An array of safe url parameters and their variable types, for valid values see {@link JFilterInput::clean()}.
	 *  
	 * @return  JController  This object to support chaining.
	 *  
	 * @since   1.5
	 */
	public function display($cachable = false, $urlparams = false)
	{
		$view   = JFactory::getApplication()->input->set('view', 'demousers');
		$layout = JFactory::getApplication()->input->set('layout', 'default');
		parent::display();

		return $this;
	}

	/**
	 * Method to get basic model.
	 *
	 * @param   string  $name    Model name.
	 *
	 * @param   string  $prefix  Model prefix.
	 * 
	 * @param   array   $config  Configuration array.
	 *
	 * @return  JModel  JModel object.
	 *
	 * @since   0.1
	 */
	public function getModel($name = 'Demouser', $prefix = 'DemoModel', $config = array('ignore_request' => true))
	{
		$model = parent::getModel($name, $prefix, $config);

		return $model;
	}
}
