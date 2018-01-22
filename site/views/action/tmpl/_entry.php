<tr id="actionRow<?php echo $this->action->action_id; ?>">
  <td>
   <?php echo $this->action->designation; ?>
  </td>
  <td>
  <?php echo $this->action->description; ?>
  </td>
  <td>
  <a href="<?php echo JRoute::_('index.php?option=com_crfpge&view=action&layout=action&action_id='.$this->action->action_id); ?>" title="Détails" class="btn"> <i class="icon icon-info-sign"></i> <?php echo JText::_('COM_CRFPGE_VIEW_DETAILS'); ?></a>

  <a href="javascript:void(0)" onclick="loadEditModal('<?php echo $this->action->action_id; ?>');" role="button" data-toggle="modal" title="Modifier" class="btn"> <i class="icon icon-edit"></i> </i> </a>

  <a href="javascript:void(0)" onclick="deleteAction('<?php echo $this->action->action_id; ?>');" title="Supprimer" class="btn"> <i class="icon icon-trash"></i> </a>
  </td>
</tr>