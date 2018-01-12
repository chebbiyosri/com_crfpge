<tr id="comiteRow<?php echo $this->document->document_id; ?>">
  <td>
   <?php echo $this->document->titre; ?>
  </td>
  <td>
  <?php echo $this->document->description; ?>
  </td>
  <td>
  <a href="<?php echo JRoute::_('index.php?option=com_crfpge&view=document&layout=document&document_id='.$this->document->document_id); ?>" title="Détails" class="btn"> <i class="icon icon-info"></i> <?php echo JText::_('COM_CRFPGE_VIEW_DETAILS'); ?></a>
  
  <a href="javascript:void(0)" onclick="loadEditDocumentModal('<?php echo $this->document->document_id; ?>');" role="button" data-toggle="modal" title="Modifier" class="btn"> <i class="icon icon-edit"></i> </i> </a>

  <a href="javascript:void(0)" onclick="deleteDocument('<?php echo $this->document->document_id; ?>');" title="Supprimer" class="btn"> <i class="icon icon-trash"></i> </a>
  </td>
</tr>

