<?php

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); 

//Display partial views
class CrfpgeViewsActivitewHtml extends JViewHTML
{

    function render()
    {
		$app = JFactory::getApplication();
	$layout = $app->input->get('layout');
	$model = new CrfpgeModelsActivite();
	switch($layout) {
      case "detail":
        $this->activite = $model->getItem();   
        
      break;
      case "list":
      default:
        $this->activites = $model->listItems();
	    $this->_activiteListView = CrfpgeHelpersView::load('Activite','_entry','phtml');
		$this->_addActiviteView = CrfpgeHelpersView::load('Activite','_add','phtml');	
      break;
    }
    //display
    return parent::render();
    	
 	}
}