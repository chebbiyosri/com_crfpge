<div id="editActionModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="editActionModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel"><?php echo JText::_('COM_CRFPGE_EDIT_ACTION'); ?></h3>
  </div>
  <div class="modal-body">
	<div class="row-fluid">
      <form id="actionEditForm">
      <input type="hidden" name="table" value="Action" />
	  <input type="hidden" name="model" value="Action" />
	  <input type="hidden" id="action_id" name="action_id"/>
	  <input type="hidden" id="comite_id" name="comite_id"/>
	  <input type="hidden" id="created_by" name="created_by"/>
      <input type="hidden" id="created" name="created"/>
	  <input type="hidden" id="state_code" name="state_code"/>
	  <input type="text" class="span-12"  id="designation" name="designation"  placeholder="<?php echo JText::_('COM_CRFPGE_DESIGNATION'); ?>" />
	  <textarea class="span-12" id="description" name="description"  placeholder="<?php echo JText::_('COM_CRFPGE_DESCRIPTION'); ?>" rows="3"></textarea>
	  <input type="date" id="date_debut" name="date_debut" class="span-6" placeholder="<?php echo JText::_('COM_CRFPGE_DATE_DEBUT'); ?>" />
      <input type="date" id="date_fin" name="date_fin" class="span-6"  placeholder="<?php echo JText::_('COM_CRFPGE_DATE_FIN'); ?>" />


	 </form>
	</div>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true"><?php echo JText::_('COM_CRFPGE_CLOSE'); ?></button>
    <button class="btn btn-primary" onclick="editAction();"><?php echo JText::_('COM_CRFPGE_EDIT'); ?></button>
  </div>
</div>