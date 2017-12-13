<a href="#newComiteModal" role="button" data-toggle="modal" class="btn pull-right">
<i class="icon icon-pencil-2"></i> <?php echo JText::_('COM_CRFPGE_ADD_COMITE'); ?>
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
