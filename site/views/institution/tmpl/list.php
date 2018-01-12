<a href="#newInstitutionModal" role="button" data-toggle="modal" class="btn pull-right">
<i class="icon icon-pencil-2"></i> <?php echo JText::_('COM_CRFPGE_ADD_INSTITUT'); ?>
</a>
<table cellpadding="0" cellspacing="0" width="100%" class="table table-striped">
	<thead>
		<tr>
			<th>Désignation</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody id="institution-list">
		<?php for($i=0, $n = count($this->institutions);$i<$n;$i++) { 
		        $this->_institutionEntryView->institution = $this->institutions[$i];
		        $this->_institutionEntryView->type = 'institution';
		        echo $this->_institutionEntryView->render();
		} ?>
	</tbody>
</table>

<?php echo $this->_addInstitutionView->render(); ?>
<?php echo $this->_editInstitutionView->render(); ?>

<script>
function loadEditInstitutionModal(id){
	var jsonArray = <?php echo json_encode($this->institutions); ?>;
	if(id){
	var result = jQuery.grep(jsonArray, function(e){ return e.institution_id == parseInt(id); });
    loadInstitutionEditModal(result[0]);
	}
}
</script>