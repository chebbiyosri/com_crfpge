<a href="<?php echo JRoute::_('index.php?option=com_crfpge&view=action&layout=action&action_id='.$this->membre->action_id); ?>" class="btn pull-right"><i class="icon icon-chevron-left"></i>
 <?php echo JText::_('COM_CRFPGE_BACK'); ?></a>
<h2 class="page-header"><?php echo $this->membre->representant; ?></h2>
<div class="row-fluid">
  <div class="span3">
    <img src="http://www.gravatar.com/avatar" />
  </div>
  <div class="span9 well well-small">
    <dl class="dl-horizontal">
      <dt><?php echo JText::_('COM_CRFPGE_MEMBRE_REPRESENTANT'); ?></dt>
      <dd><?php echo $this->membre->representant; ?></dd>
	  
      <dt><?php echo JText::_('COM_CRFPGE_MEMBRE_FONCTION'); ?></dt>
      <dd><?php echo $this->membre->fonction?></dd>
	  
      <dt><?php echo JText::_('COM_CRFPGE_MEMBRE_EMAIL'); ?></dt>
      <dd><?php echo $this->membre->email; ?></dd>
	  
	  <dt><?php echo JText::_('COM_CRFPGE_MEMBRE_TEL'); ?></dt>
      <dd><?php echo $this->membre->tel; ?></dd>
    </dl>
  </div>
</div>

