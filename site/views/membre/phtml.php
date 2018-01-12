<?php

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); 

//Display partial views
class CrfpgeViewsMembrePhtml extends JViewHTML
{

    function render()
    {
		$this->_membreEntryView = CrfpgeHelpersView::load('Membre','_entry','phtml');
		
		$institutionModel = new CrfpgeModelsInstitution();
		$institutionCollection = $institutionModel->listItems();
		$this->_addMembreView = CrfpgeHelpersView::load('Membre','_add','phtml');
		$this->_addMembreView->institutions = $institutionCollection;
		
		$this->_editMembreView = CrfpgeHelpersView::load('Membre','_edit','phtml');
		$this->_editMembreView->institutions = $institutionCollection;
    	return parent::render();
 	}
}