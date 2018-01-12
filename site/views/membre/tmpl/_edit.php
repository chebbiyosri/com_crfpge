<div id="editMembreModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="editMembreModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel"><?php echo JText::_('COM_CRFPGE_EDIT_MEMBRE'); ?></h3>
  </div>
  <div class="modal-body">
	<div class="row-fluid">
      <form id="MembreEditForm">
      <input type="hidden" name="table" value="Membre" />
	  <input type="hidden" id="membre_id" name="membre_id"/>
	  <input type="hidden" id="action_id" name="action_id"/>
	  <input type="hidden" id="institution_id" name="institution_id"/>
	  <input type="hidden" id="created_by" name="created_by"/>
      <input type="hidden" id="created" name="created"/>
	  <input type="hidden" id="state_code" name="state_code"/>
	  <select name="institution">
         <?php foreach($this->institutions as $i=>$dataItem): ?>
	         <?php if($dataItem->institution_id = 1) { ?>
		        <option selected="selected" value="<?php echo $dataItem->institution_id?>"> <?php echo $dataItem->designation?> </option>
		     <?php  } else {?>
                <option value="<?php echo $dataItem->institution_id?>"><?php echo $dataItem->designation?></option>
		     <?php } ?>
      <?php endforeach; ?>
      </select>
	  <input type="text" class="span-12"  id="representant"  name="representant" placeholder="<?php echo JText::_('COM_CRFPGE_MEMBRE_REPRESENTANT'); ?>" />
	  <input type="text" class="span-12"  id="fonction" name="fonction" placeholder="<?php echo JText::_('COM_CRFPGE_MEMBRE_FONCTION'); ?>" />
	  <input type="text" class="span-12"  id="email" name="email" placeholder="<?php echo JText::_('COM_CRFPGE_MEMBRE_EMAIL'); ?>" />
	  <input type="text" class="span-12"  id="tel" name="tel" placeholder="<?php echo JText::_('COM_CRFPGE_MEMBRE_TEL'); ?>" />

	 </form>
	</div>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true"><?php echo JText::_('COM_CRFPGE_CLOSE'); ?></button>
    <button class="btn btn-primary" onclick="editMembre();"><?php echo JText::_('COM_CRFPGE_EDIT'); ?></button>
  </div>
</div>