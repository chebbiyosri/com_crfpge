<div id="newMembreModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="newMembreModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel"><?php echo JText::_('COM_CRFPGE_ADD_MEMBRE'); ?></h3>
  </div>
  <div class="modal-body">
	<div class="row-fluid">

	 <form id="membreForm">
      <input type="hidden" name="table" value="Membre" />
	  <input type="hidden" name="action_id" value="<?php echo JFactory::getApplication()->input->get('action_id',null); ?>"/>
	  <input type="hidden" name="created_by" value="<?php echo JFactory::getUser()->id; ?>" />
      <input type="hidden" name="created" value="<?php echo JDate::getInstance(); ?>" />
	  <input type="hidden" name="state_code" value="1" />
	  
	  <select name="institution_id">
      <?php foreach($this->institutions as $i=>$dataItem): ?>
         <option value="<?php echo $dataItem->institution_id?>"><?php echo $dataItem->designation?></option>
      <?php endforeach; ?>
      </select>
	  <input type="text" class="span-12"  name="representant" placeholder="<?php echo JText::_('COM_CRFPGE_MEMBRE_REPRESENTANT'); ?>" />
	  <input type="text" class="span-12"  name="fonction" placeholder="<?php echo JText::_('COM_CRFPGE_MEMBRE_FONCTION'); ?>" />
	  <input type="text" class="span-12"  name="email" placeholder="<?php echo JText::_('COM_CRFPGE_MEMBRE_EMAIL'); ?>" />
	  <input type="text" class="span-12"  name="tel" placeholder="<?php echo JText::_('COM_CRFPGE_MEMBRE_TEL'); ?>" />
	  
	 </form>
	</div>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true"><?php echo JText::_('COM_CRFPGE_CLOSE'); ?></button>
    <button class="btn btn-primary" onclick="addMembre()"><?php echo JText::_('COM_CRFPGE_ADD'); ?></button>
  </div>
</div>