<?php defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class CrfpgeViewsInstitutionHtml extends JViewHtml
{
  function render()
  {
    $app = JFactory::getApplication();
	$layout = $app->input->get('layout');
	$model = new CrfpgeModelsInstitution();
	
	switch($layout) {
      case "institution":
        $this->institution = $model->getItem();   
		
      break;
      case "list":
	  
      default:
        $this->institutions = $model->listItems();
	    $this->_institutionEntryView = CrfpgeHelpersView::load('institution','_entry','phtml');
		$this->_addInstitutionView = CrfpgeHelpersView::load('institution','_add','phtml');
		$this->_editInstitutionView = CrfpgeHelpersView::load('institution','_edit','phtml');
      break;
    }
    //display
    return parent::render();
  } 
}