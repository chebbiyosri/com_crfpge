<?php defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class CrfpgeViewsAction_comiteHtml extends JViewHtml
{
  function render()
  {
	$app = JFactory::getApplication();
	$layout = $app->input->get('layout');
	$model = new CrfpgeModelsAction_comite();
	switch($layout) {
      case "filter":
	    $comiteModel = new CrfpgeModelsComite();
        $this->comites = $comiteModel->listItems();		
		
      break;
      case "list":
      default:
        
	    $this->actions = $model->listItems();
	    $this->_actionEntryView = CrfpgeHelpersView::load('Action_comite','_entry','phtml');	
      break;
    }
    //display
    return parent::render();
  } 
}