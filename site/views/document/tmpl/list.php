<table cellpadding="0" cellspacing="0" width="100%" class="table table-striped">
	<thead>
		<tr>
			<th>Titre</th>
			<th>Description</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody id="document-list">
		<?php for($i=0, $n = count($this->documents);$i<$n;$i++) { 
		        $this->_documentEntryView->document = $this->documents[$i];
		        $this->_documentEntryView->type = 'document';
		        echo $this->_documentEntryView->render();
		} ?>
	</tbody>
</table>
<?php echo $this->_addDocumentView->render(); ?>
<?php echo $this->_editDocumentView->render(); ?>

<script>
function loadEditDocumentModal(id){
	var jsonArray = '<?php echo json_encode($this->documents); ?>';
	var x = JSON.stringify(jsonArray);
	//var myArray = JSON.parse(jsonArray);
	if(id){
	var result = jQuery.grep(jsonArray, function(e){ return e.document_id == parseInt(id); });
    loadDocumentEditModal(result[0]);
	}
}
</script>