<tr id="bookRow<?php echo $this->comite->comite_id; ?>">
  <td>
   <?php echo $this->comite->designation; ?>
  </td>
  <td>
  <?php echo $this->comite->description; ?>
  </td>
  <td>
  <a href="<?php echo JRoute::_('index.php?option=com_crfpge&view=comite&layout=comite&comite_id='.$this->comite->comite_id); ?>">
  <?php echo JText::_('COM_CRFPGE_VIEW_DETAILS'); ?>
  </a>
  </td>
</tr>