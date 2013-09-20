<?php
/**
 * @package    DemoRedComponent
 * @copyright  (C) 2013 - Petar Tuovic - http://www.redcomponent.com
 * @license    GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
 * */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

/**
 * Demouser controller class for the DemoRedComponent package.
 *
 * @package     Redcomponent.Administrator
 * @subpackage  com_demo
 * @since       0.1
 *
 */

class DemoControllerDemouser extends JControllerForm
{
	/**
	 * @var    string  The extension for which the demousers apply.
	 * @since  0.1
	 */
	protected $extension;
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
		parent::__construct($config);

		if (empty($this->extension))
		{
			$this->extension = JFactory::getApplication()->input->get('extension', 'com_demo');
		}
	}
}
