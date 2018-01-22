<tr id="membreRow<?php echo $this->membre->membre_id; ?>">
  <td>
   <?php echo $this->membre->representant; ?>
  </td>
  <td>
   <?php echo $this->membre->institution; ?>
  </td>
  <td>
  <?php echo $this->membre->fonction; ?>
  </td>
  <td>
  <?php echo $this->membre->email; ?>
  </td>
  <td>
  <?php echo $this->membre->tel; ?>
  </td>
  <td>
  <a href="<?php echo JRoute::_('index.php?option=com_crfpge&view=membre&layout=membre&membre_id='.$this->membre->membre_id); ?>" title="Détails" class="btn"> <i class="icon icon-info-sign"></i> <?php echo JText::_('COM_CRFPGE_VIEW_DETAILS'); ?></a>
  
  <a href="javascript:void(0)" onclick="loadEditMembreModal('<?php echo $this->membre->membre_id; ?>');" role="button" data-toggle="modal" title="Modifier" class="btn"> <i class="icon icon-edit"></i> </i> </a>

  <a href="javascript:void(0)" onclick="deleteMembre('<?php echo $this->membre->membre_id; ?>');" title="Supprimer" class="btn"> <i class="icon icon-trash"></i> </a>
  </td>
</tr>

