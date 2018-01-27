<div class="row-fluid">

<form>
	  <select id="comite_id" name="comite_id">
      <?php foreach($this->comites as $i=>$dataItem): ?>
         <option value="<?php echo $dataItem->comite_id?>"><?php echo $dataItem->designation?></option>
      <?php endforeach; ?>
      </select>
	  
	 
</form>
	 <button class="btn" onclick="filterActions()" > Recherche</button>
</div>
 
<script>
function filterActions()
{
	var route = '<?php echo JRoute::_('index.php?option=com_crfpge&view=action_comite&layout=list&comite_id=',false);?>';
	var selected = jQuery("#comite_id").val();
	
	var url = route + selected;
	
    window.location.href = url;
}
</script>