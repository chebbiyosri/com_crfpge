function addComite()
{
	var comiteInfo = {};
	jQuery("#comiteForm :input").each(function(idx,ele){
		comiteInfo[jQuery(ele).attr('name')] = jQuery(ele).val();
	});

	jQuery.ajax({
		url:'index.php?option=com_crfpge&controller=add&format=raw&tmpl=component',
		type:'POST',
		data:comiteInfo,
		dataType:'json',
		success:function(data)
		{
			if (data.success == true){
				//console.log(data.html);
				//jQuery("#comite-list").append(data.html);
				jQuery("#newComiteModal").modal('hide');
				location.reload();
			}else{
            console.log("error");
			}
		},
		error: function (data) {
                alert(data.msg);
            },
		
	});

	return false;
}
function addAction()
{
	var actionInfo = {};
	jQuery("#actionForm :input").each(function(idx,ele){
		actionInfo[jQuery(ele).attr('name')] = jQuery(ele).val();
	});

	jQuery.ajax({
		url:'index.php?option=com_crfpge&controller=add&format=raw&tmpl=component',
		type:'POST',
		data:actionInfo,
		dataType:'JSON',
		success:function(data)
		{
			if ( data.success ){
				//jQuery("#action-list").append(data.html);
				jQuery("#newActionModal").modal('hide');
				location.reload();
			}else{

			}
		}
	});

}
function addActivite()
{
	var actionInfo = {};
	jQuery("#activiteForm :input").each(function(idx,ele){
		actionInfo[jQuery(ele).attr('name')] = jQuery(ele).val();
	});

	jQuery.ajax({
		url:'index.php?option=com_crfpge&controller=add&format=raw&tmpl=component',
		type:'POST',
		data:actionInfo,
		dataType:'JSON',
		success:function(data)
		{
			if ( data.success ){
				//jQuery("#activite-list").append(data.html);
				jQuery("#newActiviteModal").modal('hide');
				location.reload();
			}else{

			}
		}
	});

}
function addInstitution()
{
	var institutionInfo = {};
	jQuery("#institutionForm :input").each(function(idx,ele){
		institutionInfo[jQuery(ele).attr('name')] = jQuery(ele).val();
	});

	jQuery.ajax({
		url:'index.php?option=com_crfpge&controller=add&format=raw&tmpl=component',
		type:'POST',
		data:institutionInfo,
		dataType:'JSON',
		success:function(data)
		{
			alert(data.msg);
			if ( data.success ){
				jQuery("#newInstitutionModal").modal('hide');
				location.reload();
			}
		},
        error: function(data) {
        alert(data);
        }
	});

}
function addMembre()
{
	var membreInfo = {};
	jQuery("#membreForm :input").each(function(idx,ele){
		membreInfo[jQuery(ele).attr('name')] = jQuery(ele).val();
	});

	jQuery.ajax({
		url:'index.php?option=com_crfpge&controller=add&format=raw&tmpl=component',
		type:'POST',
		data:membreInfo,
		dataType:'JSON',
		success:function(data)
		{
			alert(data.msg);
			if ( data.success ){
				jQuery("#newMembreModal").modal('hide');
				location.reload();
			}
		},
        error: function(data) {
        alert(data);
        }
	});

}
function editComite()
{
	var comiteInfo = {};
	jQuery("#comiteEditForm :input").each(function(idx,ele){
		comiteInfo[jQuery(ele).attr('name')] = jQuery(ele).val();
	});
	
	jQuery.ajax({
	url:'index.php?option=com_crfpge&controller=edit&format=raw&tmpl=component',
	data:comiteInfo,
	type:'POST',
	dataType:'JSON',
	success:function(data)
	{
		alert(data.msg);
		if (data.success ){
			
			jQuery("#editComiteModal").modal('hide');
			location.reload();
		}
	},
        error: function(data) {
        alert(data);
        }
	});
}


function loadComiteEditModal(data)
{
	
	jQuery("#editComiteModal").modal('show');

	jQuery("#comite_id").val(data.comite_id);
	jQuery("#created_by").val(data.created_by);
	jQuery("#created").val(data.created);
	jQuery("#state_code").val(data.state_code);
	jQuery("#designation").val(data.designation);
	jQuery("#description").val(data.description);
}
function editAction()
{
	var actionInfo = {};
	jQuery("#actionEditForm :input").each(function(idx,ele){
		actionInfo[jQuery(ele).attr('name')] = jQuery(ele).val();
	});
	
	jQuery.ajax({
	url:'index.php?option=com_crfpge&controller=edit&format=raw&tmpl=component',
	data:actionInfo,
	type:'POST',
	dataType:'JSON',
	success:function(data)
	{
		alert(data.msg);
		if (data.success ){
			
			jQuery("#editActionModal").modal('hide');
			location.reload();
		}
	},
        error: function(data) {
        alert(data);
        }
	});
}
function loadActionEditModal(data)
{
	var action = JSON.parse(data);
	jQuery("#editActionModal").modal('show');

	jQuery("#action_id").val(action.action_id);
	jQuery("#comite_id").val(action.comite_id);
	jQuery("#created_by").val(action.created_by);
	jQuery("#created").val(action.created);
	jQuery("#state_code").val(action.state_code);
	jQuery("#designation").val(action.designation);
	jQuery("#description").val(action.description);
	jQuery("#date_debut").val(action.date_debut);
	jQuery("#date_fin").val(action.date_fin);
	//jQuery("#use_alerte").val(action.date_fin);
	//jQuery("#interval_alerte").val(action.interval_alerte);
	//jQuery("#date_alerte").val(action.date_alerte);
}

function editActivite()
{
	var activiteInfo = {};
	jQuery("#activiteEditForm :input").each(function(idx,ele){
		activiteInfo[jQuery(ele).attr('name')] = jQuery(ele).val();
	});
	
	jQuery.ajax({
	url:'index.php?option=com_crfpge&controller=edit&format=raw&tmpl=component',
	data:activiteInfo,
	type:'POST',
	dataType:'JSON',
	success:function(data)
	{
		alert(data.msg);
		if (data.success ){
			
			jQuery("#editActiviteModal").modal('hide');
			location.reload();
		}
	},
        error: function(data) {
        alert(data);
        }
	});
}
function loadActiviteEditModal(data)
{
	var activite = JSON.parse(data);
	jQuery("#editActiviteModal").modal('show');
	
    jQuery("#activite_id").val(activite.activite_id);
	jQuery("#action_id").val(activite.action_id);
	jQuery("#created_by").val(activite.created_by);
	jQuery("#created").val(activite.created);
	jQuery("#state_code").val(activite.state_code);
	jQuery("#designation").val(activite.designation);
	jQuery("#description").val(activite.description);
}




function deleteComite(comite_id) 
{
	jQuery.ajax({
		url:'index.php?option=com_crfpge&controller=delete&format=raw&tmpl=component&model=Comite',
		type:'POST',
		data: 'comite_id='+comite_id,
		dataType: 'JSON',
		success:function(data)
		{
			alert(data.msg);
			if(data.success)
			{
				location.reload();
				//jQuery("tr#comiteRow"+comite_id).hide();
			}
		},
        error: function(data) {
        alert(data);
        }
    
	});
	return false;
}

function deleteAction(action_id) 
{
	jQuery.ajax({
		url:'index.php?option=com_crfpge&controller=delete&format=raw&tmpl=component&model=Action',
		type:'POST',
		data: 'action_id='+action_id,
		dataType: 'JSON',
		success:function(data)
		{
			alert(data.msg);
			if(data.success)
			{
				location.reload();
				//jQuery("tr#actionRow"+action_id).hide();
			}
		},
        error: function(data) {
        alert(data);
        }
	});
	return false;
}

function deleteActivite(activite_id) 
{
	jQuery.ajax({
		url:'index.php?option=com_crfpge&controller=delete&format=raw&tmpl=component&model=Activite',
		type:'POST',
		data: 'activite_id='+activite_id,
		dataType: 'JSON',
		success:function(data)
		{
			alert(data.msg);
			if(data.success)
			{
				location.reload();
				//jQuery("tr#activiteRow"+activite_id).hide();
			}
		},
        error: function(data) {
        alert(data);
        }
	});
	return false;
}





function editInstitution()
{
	var institutionInfo = {};
	jQuery("#institutionEditForm :input").each(function(idx,ele){
		institutionInfo[jQuery(ele).attr('name')] = jQuery(ele).val();
	});
	
	jQuery.ajax({
	url:'index.php?option=com_crfpge&controller=edit&format=raw&tmpl=component',
	data:institutionInfo,
	type:'POST',
	dataType:'JSON',
	success:function(data)
	{
		alert(data.msg);
		if (data.success ){
			
			jQuery("#editInstitutionModal").modal('hide');
			location.reload();
		}
	},
        error: function(data) {
        alert(data);
        }
	});
}
function loadInstitutionEditModal(data)
{
	if(data){
	jQuery("#editInstitutionModal").modal('show');

	jQuery("#institution_id").val(data.institution_id);
	jQuery("#designation").val(data.designation);
	jQuery("#created_by").val(data.created_by);
	jQuery("#created").val(data.created);
	jQuery("#state_code").val(data.state_code);

	}
	else{
		return false;
	}
	
}
function deleteInstitution(institution_id) 
{
	jQuery.ajax({
		url:'index.php?option=com_crfpge&controller=delete&format=raw&tmpl=component&model=institution',
		type:'POST',
		data: 'institution_id='+institution_id,
		dataType: 'JSON',
		success:function(data)
		{
			alert(data.msg);
			if(data.success)
			{
				location.reload();
			}
		},
        error: function(data) {
        alert(data);
        }
	});
	return false;
}

function editMembre()
{
	var membreInfo = {};
	jQuery("#membreEditForm :input").each(function(idx,ele){
		membreInfo[jQuery(ele).attr('name')] = jQuery(ele).val();
	});
	
	jQuery.ajax({
	url:'index.php?option=com_crfpge&controller=edit&format=raw&tmpl=component',
	data:membreInfo,
	type:'POST',
	dataType:'JSON',
	success:function(data)
	{
		alert(data.msg);
		if (data.success ){
			
			jQuery("#editMembreModal").modal('hide');
			location.reload();
		}
	},
        error: function(data) {
        alert(data);
        }
	});
}
function loadMembreEditModal(data)
{
	if(data){
	jQuery("#editMembreModal").modal('show');
    jQuery("#membre_id").val(data.membre_id);
	jQuery("#action_id").val(data.action_id);
	jQuery("#institution_id").val(data.institution_id);
	
	jQuery("#representant").val(data.representant);
	jQuery("#fonction").val(data.fonction);
	jQuery("#email").val(data.email);
	jQuery("#tel").val(data.tel);
	
	jQuery("#created_by").val(data.created_by);
	jQuery("#created").val(data.created);
	jQuery("#state_code").val(data.state_code);
	jQuery("#designation").val(data.designation);
	}
	else{
		return false;
	}
}

function deleteMembre(membre_id) 
{
	jQuery.ajax({
		url:'index.php?option=com_crfpge&controller=delete&format=raw&tmpl=component&model=membre',
		type:'POST',
		data: 'membre_id='+membre_id,
		dataType: 'JSON',
		success:function(data)
		{
			alert(data.msg);
			if(data.success)
			{
				location.reload();
			}
		},
        error: function(data) {
        alert(data);
        }
	});
	return false;
}
