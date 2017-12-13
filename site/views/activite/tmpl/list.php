	<table cellpadding="0" cellspacing="0" width="100%" class="table table-striped">
	<thead>
		<tr>
		    <th><?php echo JText::_('COM_CRFPGE_DESIGNATION'); ?></th>
			<th><?php echo JText::_('COM_CRFPGE_DESCRIPTION'); ?></th>
			<th><?php echo JText::_('COM_CRFPGE_DETAILS'); ?></th>
		</tr>
	</thead>
	<tbody id="activite-list">
		<?php for($i=0, $n = count($this->activites);$i<$n;$i++) { 
		        $this->_activiteEntryView->activite = $this->activites[$i];
		        $this->_activiteEntryView->type = 'activite';
		        echo $this->_activiteEntryView->render();
		} ?>
	</tbody>
</table>

<?php echo $this->_addActiviteView->render(); ?>
