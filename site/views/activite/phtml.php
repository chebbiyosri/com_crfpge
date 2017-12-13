<?php

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); 

//Display partial views
class CrfpgeViewsActivitePhtml extends JViewHTML
{

    function render()
    {
		$this->_activiteEntryView = CrfpgeHelpersView::load('Activite','_entry','phtml');
		
		//$model = new CrfpgeModelsAction();
		//$this->action = $model->getItem();
		$this->_addActiviteView = CrfpgeHelpersView::load('Activite','_add','phtml');
		
    	
    	return parent::render();
 	}
}