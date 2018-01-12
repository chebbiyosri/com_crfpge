<div id="editInstitutionModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="editInstitutionModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel"><?php echo JText::_('COM_CRFPGE_EDIT_INSTITUT'); ?></h3>
  </div>
  <div class="modal-body">
	<div class="row-fluid">
      <form id="institutionEditForm">
      <input type="hidden" name="table" value="Institution" />
	  <input type="hidden" id="institution_id" name="institution_id"/>
	  <input type="hidden" id="created_by" name="created_by"/>
      <input type="hidden" id="created" name="created"/>
	  <input type="hidden" id="state_code" name="state_code"/>
	  <input type="text" class="span-12"  id="designation" name="designation"  placeholder="<?php echo JText::_('COM_CRFPGE_DESIGNATION'); ?>" />

	 </form>
	</div>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true"><?php echo JText::_('COM_CRFPGE_CLOSE'); ?></button>
    <button class="btn btn-primary" onclick="editInstitution();"><?php echo JText::_('COM_CRFPGE_EDIT'); ?></button>
  </div>
</div>