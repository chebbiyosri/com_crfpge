<tr id="activiteRow<?php echo $this->activite->activite_id; ?>">
  <td>
   <?php echo $this->activite->designation; ?>
  </td>
  <td class="small">
  <?php echo $this->activite->description; ?>
  </td>
  <td>
  <a href="<?php echo JRoute::_('index.php?option=com_crfpge&view=activite&layout=detail&activite_id='.$this->activite->activite_id); ?>">
  <?php echo JText::_('COM_CRFPGE_VIEW_DETAILS'); ?>
  </a>
  </td>
</tr>