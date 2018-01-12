<?php defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class CrfpgeViewsMembreHtml extends JViewHtml
{
  function render()
  {
    $app = JFactory::getApplication();
	$layout = $app->input->get('layout');
	$model = new CrfpgeModelsMembre();
	
	switch($layout) {
      case "membre":
        $this->membre = $model->getItem();

      break;
      case "list":
	  
      default:
        $this->membres = $model->listItems();

	    $this->_membreListView = CrfpgeHelpersView::load('Membre','_entry','phtml');
		$this->_addMembreView = CrfpgeHelpersView::load('Membre','_add','phtml');
		$institutionModel = new CrfpgeModelsInstitution();
		$this->_addMembreView->institutions = $institutionModel->listItems();
		
		$this->_editMembreView = CrfpgeHelpersView::load('Membre','_edit','phtml');
		$this->_editMembreView->institutions = $institutionModel->listItems();

      break;
    }
    //display
    return parent::render();
  } 
}