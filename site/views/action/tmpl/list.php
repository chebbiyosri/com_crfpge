<a href="#newActionModal" role="button" data-toggle="modal" class="btn pull-right"><i class="icon icon-pencil"></i> 
		<?php echo JText::_('COM_CRFPGE_ADD_ACTION'); ?>
</a>
<table cellpadding="0" cellspacing="0" width="100%" class="table table-striped">
	<thead>
		<tr>
		    <th><?php echo JText::_('COM_CRFPGE_DESIGNATION'); ?></th>
			<th><?php echo JText::_('COM_CRFPGE_DESCRIPTION'); ?></th>
			<th><?php echo JText::_('COM_CRFPGE_DETAILS'); ?></th>
		</tr>
	</thead>
	<tbody id="action-list">
		<?php for($i=0, $n = count($this->actions);$i<$n;$i++) { 
		        $this->_actionEntryView->action = $this->actions[$i];
		        $this->_actionEntryView->type = 'action';
		        echo $this->_actionEntryView->render();
		} ?>
	</tbody>
</table>


<?php echo $this->_addActionView->render(); ?>
<?php echo $this->_editActionView->render(); ?>
<script>
function loadEditModal(id){
	var jsonArray = <?php echo json_encode($this->actions); ?>;
	if(id){
	var result = jQuery.grep(jsonArray, function(e){ return e.action_id == parseInt(id); });
    loadActionEditModal(result[0]);
	}
}
</script>