<?php
/**
 * Demo - Adminstrator
 * @Copyright (C) 2013 - Petar Tuovic - http://www.redcomponent.com
 * @All rights reserved
 * @license under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
 * */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

class DemoModelDemousers extends JModelList {
	
	
	/**
	 * Constructor.
	 *
	 * @param   array  $config  An optional associative array of demo users.
	 * 
	 */
	public function __construct($config = array())
	{
		if (empty($config['filter_fields']))
		{
			$config['filter_fields'] = array(
					'id', 'a.id',
					'name', 'a.name',
					'username', 'a.username',
					'email', 'a.email',
					'registerDate', 'a.registerDate',
			);
		}
	
		parent::__construct($config);
	}
	
	/**
	 * Method to auto-populate the model state.
	 *
	 * Note. Calling getState in this method will result in recursion.
	 *
	 * @param   string  $ordering   An optional ordering field.
	 * @param   string  $direction  An optional direction (asc|desc).
	 *
	 * @return  void
	 *
	 * @since   1.6
	 */
	protected function populateState($ordering = null, $direction = null)
	{
		$app = JFactory::getApplication();
		$context = $this->context;
	
		$search = $this->getUserStateFromRequest($context . '.search', 'filter_search');
		$this->setState('filter.search', $search);
	
		parent::populateState('a.id', 'asc');
	}
	
	/**
	 * Method to get a store id based on model configuration state.
	 *
	 * This is necessary because the model is used by the component and
	 * different modules that might need different sets of data or different
	 * ordering requirements.
	 *
	 * @param   string  $id  A prefix for the store id.
	 *
	 * @return  string  A store id.
	 *
	 * @since   1.6
	 */
	protected function getStoreId($id = '')
	{
		// Compile the store id.
		$id .= ':' . $this->getState('filter.search');
	
		return parent::getStoreId($id);
	}
	
	
	/**
	 * Creating list query.
	 *
	 * @return   string
	 *
	 */
	protected function getListQuery()
	{
		// Create a new query object.
		$db = $this->getDbo();
		$query = $db->getQuery(true);
	
		// Select the required fields from the table.
		$query->select(
				$this->getState(
						'list.select',
						'a.id, a.name, a.username, a.email, a.registerDate'
				)
		);
		$query->from('#__demo AS a');
		
		// Filter by search in title
		$search = $this->getState('filter.search');
		
		if (!empty($search))
		{
			$search = $db->quote('%' . $db->escape($search, true) . '%');
			$query->where('(a.id LIKE ' . $search . ' OR a.name LIKE ' . $search . ' OR a.username LIKE ' . $search . ' OR a.email LIKE ' . $search . ')');
		}
		
		// Add the list ordering clause
		$listOrdering = $this->getState('list.ordering', 'a.id');
		$listDirn = $db->escape($this->getState('list.direction', 'ASC'));
		if ($listOrdering == 'a.id')
		{
			$query->order('a.id ' . $listDirn);
		}
		else
		{
			$query->order($db->escape($listOrdering) . ' ' . $listDirn);
		}
	
		return $query;
	}
}