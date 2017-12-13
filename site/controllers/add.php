<?php defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class CrfpgeControllersAdd extends JControllerBase
{
  public function execute()
  {
    $app      = JFactory::getApplication();
    $return   = array("success"=>false);

    $modelName  = $app->input->get('model', 'Action');
    $view       = $app->input->get('view', 'Action');
    $layout     = $app->input->get('layout', '_entry');
    $item       = $app->input->get('item', 'action');

    $modelName  = 'CrfpgeModels'.ucwords($modelName);

  	 $model = new $modelName();
   	if ( $row = $model->store() )
  	 {
  		 $return['success'] = true;
  		 $return['msg'] = JText::_('COM_CRFPGE_SAVE_SUCCESS');

     $return['html'] = LendrHelpersView::getHtml($view, $layout, $item, $row);
  	 }else{
  		 $return['msg'] = JText::_('COM_CRFPGE_SAVE_FAILURE');
  	 }
    
  	echo json_encode($return);

  }

}
