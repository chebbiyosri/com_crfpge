<tr id="institutionRow<?php echo $this->institution->institution_id; ?>">
  <td>
   <?php echo $this->institution->designation; ?>
  </td>
  <td>
  <a href="<?php echo JRoute::_('index.php?option=com_crfpge&view=institution&layout=institution&institution_id='.$this->institution->institution_id); ?>" title="Détails" class="btn"> <i class="icon icon-info-sign"></i> <?php echo JText::_('COM_CRFPGE_VIEW_DETAILS'); ?></a>
  
  <a href="javascript:void(0)" onclick="loadEditInstitutionModal('<?php echo $this->institution->institution_id; ?>');" role="button" data-toggle="modal" title="Modifier" class="btn"> <i class="icon icon-edit"></i> </i> </a>

  <a href="javascript:void(0)" onclick="deleteInstitution('<?php echo $this->institution->institution_id; ?>');" title="Supprimer" class="btn"> <i class="icon icon-trash"></i> </a>
  </td>
</tr>

