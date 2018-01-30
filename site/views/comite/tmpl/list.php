<a href="#newComiteModal" role="button" data-toggle="modal" class="btn pull-right">
<i class="icon icon-pencil"></i> <?php echo JText::_('COM_CRFPGE_ADD_COMITE'); ?>
</a>
<table cellpadding="0" cellspacing="0" width="100%" class="table table-striped">
	<thead>
		<tr>
			<th>Designation</th>
			<th>Description</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody id="comite-list">
		<?php for($i=0, $n = count($this->comites);$i<$n;$i++) { 
		        $this->_comiteListView->comite = $this->comites[$i];
		        $this->_comiteListView->type = 'comite';
		        echo $this->_comiteListView->render();
		} ?>
	</tbody>
</table>
<?php echo $this->_addComiteView->render(); ?>
<?php echo $this->_editComiteView->render(); ?>

<script>

function loadEditModal(id){
	var jsonArray = '<?php echo json_encode($this->comites); ?>';
	var myArray = JSON.parse(jsonArray);
	if(id){
	var result = jQuery.grep(myArray, function(e){ return e.comite_id == parseInt(id); });
    loadComiteEditModal(result[0]);
	}
}
</script>