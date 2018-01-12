<a href="<?php echo JRoute::_('index.php?option=com_crfpge&view=institution&layout=list'); ?>" class="btn pull-right"><i class="icon icon-chevron-left"></i>
 <?php echo JText::_('COM_CRFPGE_BACK'); ?></a>
<h2 class="page-header"><?php echo $this->institution->designation; ?></h2>
<div class="row-fluid">
  <div class="span3">
    <img src="http://www.gravatar.com/avatar" />
  </div>
  <div class="span9 well well-small">
    <dl class="dl-horizontal">
      <dt><?php echo JText::_('COM_CRFPGE_DESIGNATION'); ?></dt>
      <dd><?php echo $this->institution->designation; ?></dd>
	  
      <dt><?php echo JText::_('COM_CRFPGE_CREATED'); ?></dt>
      <dd><?php echo JHtml::_('date', $this->institution->created, JText::_('DATE_FORMAT_LC3')); ?></dd>
	  
	  <dt><?php echo JText::_('COM_CRFPGE_CREATED_BY'); ?></dt>
      <dd><?php echo $this->institution->created_by; ?></dd>
	  
	  <dt><?php echo JText::_('COM_CRFPGE_MODIFIED'); ?></dt>
      <dd><?php echo JHtml::_('date', $this->institution->modified, JText::_('DATE_FORMAT_LC3')); ?></dd>
	  <dt><?php echo JText::_('COM_CRFPGE_MODIFIED_BY'); ?></dt>
      <dd><?php echo $this->institution->modified_by; ?></dd>
    </dl>
  </div>
</div>
