<?php
/**
 * @package     RedcomponentDemo.Administrator
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
JToolBarHelper::title(JText::_('COM_DEMO_DEMOUSER_ADD'));
JHtml::_('behavior.formvalidation');
JHtml::_('formbehavior.chosen', 'select');

?>

<script type="text/javascript">
	Joomla.submitbutton = function(task)
	{
		if (task == 'demouser.cancel' || document.formvalidator.isValid(document.id('demouser-form')))
		{
			Joomla.submitform(task, document.getElementById('demouser-form'));
		}
	}
</script>

<form action="<?php echo JRoute::_('index.php?option=com_demo&view=demouser&layout=edit&id=' . (int) $this->item->id); ?>" method="post" name="adminForm" id="demouser-form"  class="form-validate form-horizontal">
	
	<?php echo JLayoutHelper::render('joomla.edit.item_title', $this); ?>
	
	<div class="row-fluid">
		<!-- Begin Content -->
		<div class="span10 form-horizontal">
			<?php echo JHtml::_('bootstrap.startTabSet', 'myTab', array('active' => 'general')); ?>
			<?php echo JHtml::_('bootstrap.addTab', 'myTab', 'general', JText::_('COM_DEMO_FIELDSET_DETAILS', true)); ?>
			<div class="control-group">
				<div class="control-label">
					<?php echo $this->form->getLabel('id'); ?>
				</div>
				<div class="controls">
					<?php echo $this->form->getInput('id'); ?>
				</div>
			</div>
			<div class="control-group">
				<div class="control-label">
					<?php echo $this->form->getLabel('name'); ?>
				</div>
				<div class="controls">
					<?php echo $this->form->getInput('name'); ?>
				</div>
			</div>
			<div class="control-group">
				<div class="control-label">
					<?php echo $this->form->getLabel('username'); ?>
				</div>
				<div class="controls">
					<?php echo $this->form->getInput('username'); ?>
				</div>
			</div>
			<div class="control-group">
				<div class="control-label">
					<?php echo $this->form->getLabel('password'); ?>
				</div>
				<div class="controls">
					<?php echo $this->form->getInput('password'); ?>
				</div>
			</div>
			<div class="control-group">
				<div class="control-label">
					<?php echo $this->form->getLabel('password2'); ?>
				</div>
				<div class="controls">
					<?php echo $this->form->getInput('password2'); ?>
				</div>
			</div>
			<div class="control-group">
				<div class="control-label">
					<?php echo $this->form->getLabel('email'); ?>	
				</div>
				<div class="controls">
					<?php echo $this->form->getInput('email'); ?>
				</div>
			</div>
			<div class="control-group">
				<div class="control-label">
					<?php echo $this->form->getLabel('registerDate'); ?>	
				</div>
				<div class="controls">
					<?php echo $this->form->getInput('registerDate'); ?>
				</div>
			</div>
			<?php echo JHtml::_('bootstrap.endTab'); ?>
			<input type="hidden" name="task" value="" />
			<?php echo JHtml::_('form.token'); ?>
		</div>
		<!-- End Content -->		
	</div>
</form>