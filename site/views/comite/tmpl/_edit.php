<div id="editComiteModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="editComiteModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel"><?php echo JText::_('COM_CRFPGE_EDIT_COMITE'); ?></h3>
  </div>
  <div class="modal-body">
	<div class="row-fluid">
      <form id="comiteEditForm">
      <input type="hidden" name="table" value="Comite" />
	  <input type="hidden" id="comite_id" name="comite_id"/>
	  <input type="hidden" id="created_by" name="created_by"/>
      <input type="hidden" id="created" name="created"/>
	  <input type="hidden" id="state_code" name="state_code"/>
	  <input type="text" class="span-12"  id="designation" name="designation"  placeholder="<?php echo JText::_('COM_CRFPGE_DESIGNATION'); ?>" />
	  <textarea class="span-12" id="description" name="description"  placeholder="<?php echo JText::_('COM_CRFPGE_DESCRIPTION'); ?>" name="summary" rows="3"></textarea>

	 </form>
	</div>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true"><?php echo JText::_('COM_CRFPGE_CLOSE'); ?></button>
    <button class="btn btn-primary" onclick="editComite();"><?php echo JText::_('COM_CRFPGE_EDIT'); ?></button>
  </div>
</div>