<?php defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class CrfpgeViewsActionHtml extends JViewHtml
{
  function render()
  {
	$app = JFactory::getApplication();
	$layout = $app->input->get('layout');
	$model = new CrfpgeModelsAction();
	switch($layout) {
      case "action":
        $this->action = $model->getItem();   
        $this->_activiteListView = CrfpgeHelpersView::load('Activite','list','phtml');
		$this->_activiteListView->activites = $this->action->activites;
		
		$this->_documentListView = CrfpgeHelpersView::load('Document','list','phtml');
		$this->_documentListView->documents = $this->action->documents;
		
		
		$this->_membreListView = CrfpgeHelpersView::load('Membre','list','phtml');
		$this->_membreListView->membres = $this->action->membres;
		
		
      break;
      case "list":
      default:
        $this->actions = $model->listItems();
	    $this->_actionEntryView = CrfpgeHelpersView::load('Action','_entry','phtml');
		$this->_addActionView = CrfpgeHelpersView::load('Action','_add','phtml');	
      break;
    }
    //display
    return parent::render();
  } 
}