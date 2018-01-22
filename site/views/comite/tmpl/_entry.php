<tr id="comiteRow<?php echo $this->comite->comite_id; ?>">
  <td>
   <?php echo $this->comite->designation; ?>
  </td>
  <td>
  <?php echo $this->comite->description; ?>
  </td>
  <td>
  <a href="<?php echo JRoute::_('index.php?option=com_crfpge&view=comite&layout=comite&comite_id='.$this->comite->comite_id); ?>" title="Détails" class="btn"> <i class="icon icon-info-sign"></i> <?php echo JText::_('COM_CRFPGE_VIEW_DETAILS'); ?></a>
  
  <a href="javascript:void(0)" onclick="loadEditModal('<?php echo $this->comite->comite_id; ?>');" role="button" data-toggle="modal" title="Modifier" class="btn"> <i class="icon icon-edit"></i> </i> </a>

  <a href="javascript:void(0)" onclick="deleteComite('<?php echo $this->comite->comite_id; ?>');" title="Supprimer" class="btn"> <i class="icon icon-trash"></i> </a>
  </td>
</tr>

