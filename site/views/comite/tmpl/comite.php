<a href="<?php echo JRoute::_('index.php?option=com_crfpge&view=comite&layout=list'); ?>" class="btn pull-right"><i class="icon icon-chevron-left"></i>
 <?php echo JText::_('COM_CRFPGE_BACK'); ?></a>
<h2 class="page-header"><?php echo $this->comite->designation; ?></h2>
<div class="row-fluid">
  <div class="span3">
    <img src="http://www.gravatar.com/avatar" />
  </div>
  <div class="span9 well well-small">
    <dl class="dl-horizontal">
      <dt><?php echo JText::_('COM_CRFPGE_DESIGNATION'); ?></dt>
      <dd><?php echo $this->comite->designation; ?></dd>
      <dt><?php echo JText::_('COM_CRFPGE_DESCRIPTION'); ?></dt>
      <dd><?php echo $this->comite->description?></dd>
      <dt><?php echo JText::_('COM_CRFPGE_CREATED'); ?></dt>
      <dd><?php echo JHtml::_('date', $this->comite->created, JText::_('DATE_FORMAT_LC3')); ?></dd>
    </dl>
  </div>
</div>
<br />
<div class="row-fluid">
<div class="tabbable">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#actionsTab" data-toggle="tab"><?php echo JText::_('COM_CRFPGE_ACTION_LIST'); ?></a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="actionsTab">

      <h2><?php echo JText::_('COM_CRFPGE_ACTION_LIST'); ?></h2>
      <?php echo $this->_actionListView->render(); ?>
    </div>
  </div>
</div>
</div>