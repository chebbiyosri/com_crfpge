<div id="editDocumentModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="editDocumentModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel"><?php echo JText::_('COM_CRFPGE_EDIT_DOCUMENT'); ?></h3>
  </div>
  <div class="modal-body">
	<div class="row-fluid">
      <form id="documentEditForm">
      <input type="hidden" name="table" value="Document" />
	  <input type="hidden" id="document_id" name="document_id"/>
	  <input type="hidden" id="action_id" name="action_id"/>
	  <input type="hidden" id="created_by" name="created_by"/>
      <input type="hidden" id="created" name="created"/>
	  <input type="hidden" id="state_code" name="state_code"/>
	  <input type="text" class="span-12" id="titre" name="titre" placeholder="<?php echo JText::_('COM_CRFPGE_TITRE'); ?>" />
	  <input type="text" class="span-12" id="nom_fichier" name="nom_fichier" placeholder="<?php echo JText::_('COM_CRFPGE_DOCUMENT_NOM'); ?>" />
	  <textarea class="span-12" id="description" name="description"  placeholder="<?php echo JText::_('COM_CRFPGE_DESCRIPTION'); ?>" rows="3"></textarea>

	 </form>
	</div>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true"><?php echo JText::_('COM_CRFPGE_CLOSE'); ?></button>
    <button class="btn btn-primary" onclick="editDocument();"><?php echo JText::_('COM_CRFPGE_EDIT'); ?></button>
  </div>
</div>