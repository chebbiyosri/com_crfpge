<?php defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class CrfpgeControllersDelete extends JControllerBase
{
  public function execute()
  {
    $app = JFactory::getApplication();

  	$return = array("success"=>false);
    
    $modelName  = $app->input->get('model');
	
  	$modelName  = 'CrfpgeModels'.ucwords($modelName);
	
    $model = new $modelName();

  	if ( $row = $model->delete() )
  	{
  		$return['success'] = true;
  		$return['msg'] = JText::_('COM_CRFPGE_DELETE_SUCCESS');
  	}else{
  		$return['msg'] = JText::_('COM_CRFPGE_DELETE_FAILURE');
  	}

  	echo json_encode($return);

  }

}