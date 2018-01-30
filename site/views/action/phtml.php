<?php

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); 

//Display partial views
class CrfpgeViewsActionPhtml extends JViewHTML
{

    function render()
    {
    	$this->_actionEntryView = CrfpgeHelpersView::load('Action','_entry','phtml');
		$this->_addActionView = CrfpgeHelpersView::load('Action','_add','phtml');
		$this->_editActionView = CrfpgeHelpersView::load('Action','_edit','phtml');
		$defaultModel = new CrfpgeModelsDefault();
		
		$this->_comiteUser = $defaultModel->getComite();;

    	return parent::render();
 	}
}