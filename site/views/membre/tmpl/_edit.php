<div id="editMembreModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="editMembreModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel"><?php echo JText::_('COM_CRFPGE_EDIT_MEMBRE'); ?></h3>
  </div>
  <div class="modal-body">
	<div class="row-fluid">
      <form id="membreEditForm">
      <input type="hidden" name="table" value="Membre" />
	  <input type="hidden" id="edit_membre_id" name="membre_id"/>
	  <input type="hidden" id="edit_action_id" name="action_id"/>
	  <input type="hidden" id="edit_institution_id" name="edit_institution_id"/>
	  <input type="hidden" id="edit_created_by" name="created_by"/>
      <input type="hidden" id="edit_created" name="created"/>
	  <input type="hidden" id="edit_state_code" name="state_code"/>
	  <select id ="institutionDropdown" name="institution_id">
         <?php foreach($this->institutions as $i=>$dataItem): ?>
                <option value="<?php echo $dataItem->institution_id?>"><?php echo $dataItem->designation?></option>
      <?php endforeach; ?>
      </select>
	  <input type="text" class="span-12"  id="edit_representant"  name="representant" placeholder="<?php echo JText::_('COM_CRFPGE_MEMBRE_REPRESENTANT'); ?>" />
	  <input type="text" class="span-12"  id="edit_fonction" name="fonction" placeholder="<?php echo JText::_('COM_CRFPGE_MEMBRE_FONCTION'); ?>" />
	  <input type="text" class="span-12"  id="edit_email" name="email" placeholder="<?php echo JText::_('COM_CRFPGE_MEMBRE_EMAIL'); ?>" />
	  <input type="text" class="span-12"  id="edit_tel" name="tel" placeholder="<?php echo JText::_('COM_CRFPGE_MEMBRE_TEL'); ?>" />

	 </form>
	</div>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true"><?php echo JText::_('COM_CRFPGE_CLOSE'); ?></button>
    <button class="btn btn-primary" onclick="editMembre();"><?php echo JText::_('COM_CRFPGE_EDIT'); ?></button>
  </div>
</div>

