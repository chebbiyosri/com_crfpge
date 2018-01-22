<div id="newActionModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="newActionModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel"><?php echo JText::_('COM_CRFPGE_ADD_ACTION'); ?></h3>
  </div>
  <div class="modal-body">
	<div class="row-fluid">
	<form id="actionForm">
	  <input type="hidden" name="table" value="Action" />
	  <input type="hidden" name="created_by" value="<?php echo JFactory::getUser()->id; ?>" />
      <input type="hidden" name="created" value="<?php echo JDate::getInstance(); ?>" />
	  <input type="hidden" name="comite_id" value="<?php echo JFactory::getApplication()->input->get('comite_id',null); ?>" />
	  <input type="hidden" name="state_code" value="1" />
	  <input type="text" class="span-12"  name="designation" placeholder="<?php echo JText::_('COM_CRFPGE_DESIGNATION'); ?>" />
	  <textarea class="span-12" name="description" placeholder="<?php echo JText::_('COM_CRFPGE_DESCRIPTION'); ?>" name="summary" rows="3"></textarea>
	  <input type="date" class="span-6" value ="<?php echo JDate::getInstance(); ?>" name="date_debut" placeholder="<?php echo JText::_('COM_CRFPGE_DATE_DEBUT'); ?>" />
      <input type="date" class="span-6" value ="<?php echo JDate::getInstance(); ?>" name="date_fin" placeholder="<?php echo JText::_('COM_CRFPGE_DATE_FIN'); ?>" />
	  <div class="checkbox">
      <label>
      <input type="checkbox" name="use_alerte" value=""><?php echo JText::_('COM_CRFPGE_ACTION_USE_ALERTE'); ?></label>
      </div>
      <input type="text" class="span-12" name="interval_alerte" placeholder="<?php echo JText::_('COM_CRFPGE_ACTION_INTERVALLE_ALERTE'); ?>" />
	  <input type="date" class="span-12" value="<?php echo JDate::getInstance(); ?>" name="date_alerte" placeholder="<?php echo JText::_('COM_CRFPGE_ACTION_DATE_ALERTE'); ?>" />
	</form>
	</div>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true"><?php echo JText::_('COM_CRFPGE_CLOSE'); ?></button>
    <button class="btn btn-primary" onclick="addAction()"><?php echo JText::_('COM_CRFPGE_ADD'); ?></button>
  </div>
</div>