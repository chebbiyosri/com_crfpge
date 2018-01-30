<tr id="activiteRow<?php echo $this->activite->activite_id; ?>">
  <td>
   <?php echo $this->activite->designation; ?>
  </td>
  <td>
  <?php echo $this->activite->description; ?>
  </td>
  <td>
 
   <a href="<?php  echo JRoute::_('index.php?option=com_crfpge&view=activite&layout=activite&activite_id='.$this->activite->activite_id); ?>" title="Détails" class="btn"> <i class="icon icon-info-sign"></i> <?php echo JText::_('COM_CRFPGE_VIEW_DETAILS'); ?></a>

    <a href="javascript:void(0)" onclick="loadEditModal('<?php echo $this->activite->activite_id; ?>');" role="button" data-toggle="modal" title="Modifier" class="btn"> <i class="icon icon-edit"></i> </i> </a>

  <a href="javascript:void(0)" onclick="deleteActivite('<?php echo $this->activite->activite_id; ?>');" title="Supprimer" class="btn"> <i class="icon icon-trash"></i> </a>
  </td>
</tr>