<div id="newActiviteModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="newActiviteModal" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel"><?php echo JText::_('COM_CRFPGE_ADD_ACTIVITE'); ?></h3>
  </div>
  <div class="modal-body">
	<div class="row-fluid">
		<form id="activiteForm">
              <input type="hidden" name="table" value="Activite" />
			  <input type="hidden" name="state_code" value="1" />
	          <input type="hidden" name="created_by" value="<?php echo JFactory::getUser()->id; ?>" />
              <input type="hidden" name="created" value="<?php echo JDate::getInstance(); ?>" />
	          <input type="hidden" name="action_id" value="<?php echo JFactory::getApplication()->input->get('action_id',null); ?>" />
	          <input type="text" class="span-12"  name="designation" placeholder="<?php echo JText::_('COM_CRFPGE_DESIGNATION'); ?>" />
	          <textarea class="span-12" name="description" placeholder="<?php echo JText::_('COM_CRFPGE_DESCRIPTION'); ?>" name="summary" rows="3"></textarea>
		</form>
	</div>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true"><?php echo JText::_('COM_CRFPGE_CLOSE'); ?></button>
    <button class="btn btn-primary" onclick="addActivite()"><?php echo JText::_('COM_CRFPGE_ADD'); ?></button>
  </div>
</div>