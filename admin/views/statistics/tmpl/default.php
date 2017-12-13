<div class="row-fluid">
<div class="span4 thumbnail">
<h3>
	<span class="label label-info pull-right"><?php echo $this->stats['total_comites']; ?></span>
	<?php echo JText::_('COM_CRFPGE_STATISTICS_TOTAL_COMITES'); ?>
</h3>
<div class="progress progress-success">
  <div class="bar" style="width: <?php echo $this->stats['total_comites'] > 100 ? $this->stats['total_comites'] / 100 : $this->stats['total_comites']; ?>%"></div>
</div>
<p><?php echo JText::_('COM_CRFPGE_STATISTICS_TOTAL_COMITES_DESC'); ?></p>
</div>
<div class="span4 thumbnail">
<h3>
	<span class="label label-info pull-right"><?php echo $this->stats['total_actions']; ?></span>
	<?php echo JText::_('COM_CRFPGE_STATISTICS_TOTAL_ACTIONS'); ?>
</h3>
<div class="progress progress-success">
  <div class="bar" style="width: <?php echo $this->stats['total_actions'] > 100 ? $this->stats['total_actions'] / 100 : $this->stats['total_actions']; ?>%"></div>
</div>
<p><?php echo JText::_('COM_CRFPGE_STATISTICS_TOTAL_ACTIONS_DESC'); ?></p>
</div>

<div class="span4 thumbnail">
<h3>
	<span class="label label-info pull-right"><?php echo $this->stats['total_activites']; ?></span>
	<?php echo JText::_('COM_CRFPGE_STATISTICS_TOTAL_ACTIVITES'); ?>
</h3>
<div class="progress progress-success">
  <div class="bar" style="width: <?php echo $this->stats['total_activites'] > 100 ? $this->stats['total_activites'] / 100 : $this->stats['total_activites']; ?>%"></div>
</div>
<p><?php echo JText::_('COM_CRFPGE_STATISTICS_TOTAL_ACTIVITES_DESC'); ?></p>
</div>


</div>
<br>

<div class="row-fluid">
<div class="span4 thumbnail">
<h3>
	<span class="label label-info pull-right"><?php echo $this->stats['total_institutions']; ?></span>
	<?php echo JText::_('COM_CRFPGE_STATISTICS_TOTAL_INSTITUTIONS'); ?>
</h3>
<div class="progress progress-success">
  <div class="bar" style="width: <?php echo $this->stats['total_institutions'] > 100 ? $this->stats['total_institutions'] / 100 : $this->stats['total_institutions']; ?>%"></div>
</div>
<p><?php echo JText::_('COM_CRFPGE_STATISTICS_TOTAL_INSTITUTIONS_DESC'); ?></p>
</div>
<div class="span4 thumbnail">
<h3>
	<span class="label label-info pull-right"><?php echo $this->stats['total_membres']; ?></span>
	<?php echo JText::_('COM_CRFPGE_STATISTICS_TOTAL_RESPONSABLES'); ?>
</h3>
<div class="progress progress-success">
  <div class="bar" style="width: <?php echo $this->stats['total_membres'] > 100 ? $this->stats['total_membres'] / 100 : $this->stats['total_membres']; ?>%"></div>
</div>
<p><?php echo JText::_('COM_CRFPGE_STATISTICS_TOTAL_RESPONSABLES_DESC'); ?></p>
</div>

<div class="span4 thumbnail">
<h3>
	<span class="label label-info pull-right"><?php echo $this->stats['total_documents']; ?></span>
	<?php echo JText::_('COM_CRFPGE_STATISTICS_TOTAL_DOCUMENTS'); ?>
</h3>
<div class="progress progress-success">
  <div class="bar" style="width: <?php echo $this->stats['total_documents'] > 100 ? $this->stats['total_documents'] / 100 : $this->stats['total_documents']; ?>%"></div>
</div>
<p><?php echo JText::_('COM_CRFPGE_STATISTICS_TOTAL_DOCUMENTS_DESC'); ?></p>
</div>


</div>