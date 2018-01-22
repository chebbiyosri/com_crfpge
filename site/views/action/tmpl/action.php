<a href="<?php echo JRoute::_('index.php?option=com_crfpge&view=comite&layout=comite&comite_id='.$this->action->comite_id); ?>" class="btn pull-right"><i class="icon icon-chevron-left"></i>
 <?php echo JText::_('COM_CRFPGE_BACK'); ?></a>
<h2 class="page-header"><?php echo $this->action->designation; ?></h2>
<div class="row-fluid">
  <div class="span3">
    <img src="http://www.gravatar.com/avatar" />
  </div>
  <div class="span9 well well-small">
    <dl class="dl-horizontal">
      <dt><?php echo JText::_('COM_CRFPGE_DESIGNATION'); ?></dt>
      <dd><?php echo $this->action->designation; ?></dd>
      <dt><?php echo JText::_('COM_CRFPGE_DESCRIPTION'); ?></dt>
      <dd><?php echo $this->action->description?></dd>
      <dt><?php echo JText::_('COM_LENDR_PROFILE_JOIN'); ?></dt>
      <dd><?php echo JHtml::_('date', $this->action->created, JText::_('DATE_FORMAT_LC3')); ?></dd>
    </dl>
  </div>
</div>
<br />
<div class="row-fluid">
<div class="tabbable">

<ul class="nav nav-tabs" id="myTab">
    <li class="active"><a href="#activitesTab" data-toggle="tab"><?php echo JText::_('COM_CRFPGE_ACTIVITE_LIST'); ?></a></li>
    <li><a href="#membresTab" data-toggle="tab">Membres</a></li>
	<li><a href="#documentsTab" data-toggle="tab">Documents</a></li>
</ul>

<div class="tab-content">
    <div class="tab-pane active" id="activitesTab">
        <a href="#newActiviteModal" role="button" data-toggle="modal" class="btn pull-right"><i class="icon icon-pencil"></i> 
		<?php echo JText::_('COM_CRFPGE_ADD_ACTIVITE'); ?>
		</a>
        <h2><?php echo JText::_('COM_CRFPGE_ACTIVITE_LIST'); ?></h2>
        <?php echo $this->_activiteListView->render(); ?>
    </div>

    <div class="tab-pane" id="membresTab">
	 <a href="#newMembreModal" role="button" data-toggle="modal" class="btn pull-right"><i class="icon icon-pencil"></i> 
		Ajouter un membre
		</a>
        <h2>Liste des membres</h2>
        <?php echo $this->_membreListView->render(); ?>
    </div>
	<div class="tab-pane" id="documentsTab">
	 <a href="#newDocumentModal" role="button" data-toggle="modal" class="btn pull-right"><i class="icon icon-pencil"></i> 
		Ajouter un document
		</a>
        <h2>Liste des documents</h2>
        <?php echo $this->_documentListView->render(); ?>
    </div>
</div>
</div>
</div>
