<table cellpadding="0" cellspacing="0" width="100%" class="table table-striped">
	<thead>
		<tr>
			<th>Représentant</th>
			<th>Institution</th>
			<th>Fonction</th>
			<th>Email</th>
			<th>Tél.</th>
		</tr>
	</thead>
	<tbody id="membre-list">
		<?php for($i=0, $n = count($this->membres);$i<$n;$i++) { 
		        $this->_membreEntryView->membre = $this->membres[$i];
		        $this->_membreEntryView->type = 'membre';
		        echo $this->_membreEntryView->render();
		} ?>
	</tbody>
</table>
<?php echo $this->_addMembreView->render(); ?>
<?php echo $this->_editMembreView->render(); ?>

<script>
function loadEditMembreModal(id){
	var jsonArray = <?php echo json_encode($this->membres); ?>;
	if(id){
	var result = jQuery.grep(jsonArray, function(e){ return e.membre_id == parseInt(id); });
    loadMembreEditModal(result[0]);
	}
}
</script>