<?php

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); 

//Display partial views
class CrfpgeViewsDocumentPhtml extends JViewHTML
{

    function render()
    {
    	$this->_documentEntryView = CrfpgeHelpersView::load('Document','_entry','phtml');
		$this->_addDocumentView = CrfpgeHelpersView::load('Document','_add','phtml');
		$this->_editDocumentView = CrfpgeHelpersView::load('Document','_edit','phtml');
		
    	return parent::render();
 	}
}