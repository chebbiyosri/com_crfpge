<?php

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); 

//Display partial views
class CrfpgeViewsActionPhtml extends JViewHTML
{

    function render()
    {
    	$this->_actionEntryView = CrfpgeHelpersView::load('Action','_entry','phtml');
		
		//$model = new CrfpgeModelsComite();
		//$this->comite = $model->getItem();
		$this->_addActionView = CrfpgeHelpersView::load('Action','_add','phtml');
		//$this->_addActionView->comite = $this->comite;
    	
    	return parent::render();
 	}
}