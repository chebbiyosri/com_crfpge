<?php

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); 

//Display partial views
class CrfpgeViewsAction_comitePhtml extends JViewHTML
{

    function render()
    {
    	$this->_actionEntryView = CrfpgeHelpersView::load('Action_comite','_entry','phtml');



    	return parent::render();
 	}
}