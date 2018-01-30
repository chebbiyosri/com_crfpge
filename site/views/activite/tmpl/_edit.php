<div id="editActiviteModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="editActiviteModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel"><?php echo JText::_('COM_CRFPGE_EDIT_ACTIVITE'); ?></h3>
  </div>
  <div class="modal-body">
	<div class="row-fluid">
      <form id="activiteEditForm">
      <input type="hidden" name="table" value="Activite" />
	  <input type="hidden" id="edit_activite_id" name="activite_id"/>
	  <input type="hidden" id="edit_action_id" name="action_id"/>
	  <input type="hidden" id="edit_created_by" name="created_by"/>
      <input type="hidden" id="edit_created" name="created"/>
	  <input type="hidden" id="edit_state_code" name="state_code"/>
	  <input type="text" class="span-12"  id="edit_designation" name="designation" placeholder="<?php echo JText::_('COM_CRFPGE_DESIGNATION'); ?>" />
	  <textarea class="span-12" id="edit_description" name="description" placeholder="<?php echo JText::_('COM_CRFPGE_DESCRIPTION'); ?>" rows="3"></textarea>
	 
	  
	 </form>
	</div>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true"><?php echo JText::_('COM_CRFPGE_CLOSE'); ?></button>
    <button class="btn btn-primary" onclick="editActivite();"><?php echo JText::_('COM_CRFPGE_EDIT'); ?></button>
  </div>
</div>