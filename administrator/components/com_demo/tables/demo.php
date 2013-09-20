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
class DemoTableDemo extends JTable
{
	/**
	 * @var    int  Table demouser id column.
	 * @since  0.1
	 */
	protected $id;

	/**
	 * @var    datetime  Date and time demouser register column.
	 * @since  0.1
	 */
	protected $registerDate;

	/**
	 * @var    string  Demouser username column.
	 * @since  0.1
	 */
	protected $username;

	/**
	 * @var    string  Demouser real name column.
	 * @since  0.1
	 */
	protected $name;

	/**
	 * @var    string  Demouser password column.
	 * @since  0.1
	 */
	protected $password;

	/**
	 * Constructor.
	 *
	 * @param   object  &$_db  Joomla DB object.
	 *
	 * @since   0.1
	 */
	public function __construct(&$_db)
	{
		parent::__construct("#__demo", "id", $_db);
	}

	/**
	 * Stores a demouser
	 *
	 * @param   boolean  $updateNulls  True to update fields even if they are null.
	 *
	 * @return  boolean  True on success, false on failure.
	 * 
	 * @since   0.1
	 *
	 */
	public function store($updateNulls = false)
	{
		$date	= JFactory::getDate();
		$user	= JFactory::getUser();

		if (!$this->id)
		{
			$this->registerDate = $date->toSql();
		}

		return parent::store($updateNulls);
	}
}
