<tr id="actionRow<?php echo $this->action->action_id; ?>">
  <td>
   <?php echo $this->action->designation; ?>
  </td>
  <td class="small">
  <?php echo $this->action->description; ?>
  </td>
  <td>
  <a href="<?php echo JRoute::_('index.php?option=com_crfpge&view=action&layout=action&action_id='.$this->action->action_id); ?>">
  <?php echo JText::_('COM_CRFPGE_VIEW_DETAILS'); ?>
  </a>
  </td>
</tr>