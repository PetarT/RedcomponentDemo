<?php
/**
 * @package     Redcomponent.Administrator
 * @subpackage  com_demo
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Categories view class for the Category package.
 *
 * @package     Redcomponent.Administrator
 * @subpackage  com_demo
 * 
 */
class DemoController extends JControllerLegacy
{
	/**
	 * @var    string  The extension for which the demousers apply.
	 * @since  1.6
	 */
	protected $extension;

	/**
	 * Constructor.
	 *
	 * @param   array  $config  An optional associative array of configuration settings.
	 *
	 * @see     JController
	 * @since   1.6
	 */
	public function __construct($config = array())
	{
		parent::__construct($config);

		// Guess the JText message prefix. Defaults to the option.
		if (empty($this->extension))
		{
			$this->extension = $this->input->get('extension', 'com_demo');
		}
	}

	/**
	 * Method to display a view.
	 *
	 * @param   boolean      $cachable   If true, the view output will be cached
	 * @param   array        $urlparams  An array of safe url parameters and their variable types, for valid values see {@link JFilterInput::clean()}.
	 *
	 * @return  JController  This object to support chaining.
	 *
	 * @since   1.5
	 */
	public function display($cachable = false, $urlparams = false)
	{
		// Get the document object.
		$document = JFactory::getDocument();

		// Set the default view name and format from the Request.
		$vName   = $this->input->get('view', 'demousers');
		$vFormat = $document->getType();
		$lName   = $this->input->get('layout', 'default');
		$id      = $this->input->getInt('id');

		// Get and render the view.
		if ($view = $this->getView($vName, $vFormat))
		{
			// Get the model for the view.
			$model = $this->getModel($vName, 'DemoModel', array('name' => $vName . '.' . substr($this->extension, 4)));

			// Push the model into the view (as default).
			$view->setModel($model, true);
			$view->setLayout($lName);

			// Push document object into the view.
			$view->document = $document;

			$view->display();
		}

		return $this;
	}
}
