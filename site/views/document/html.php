<?php defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class CrfpgeViewsDocumentHtml extends JViewHtml
{
  function render()
  {
    $app = JFactory::getApplication();
	$layout = $app->input->get('layout');
	$model = new CrfpgeModelsDocument();
	
	switch($layout) {
      case "document":
        $this->document = $model->getItem();
      
      break;
      case "list":
	  
      default:
        $this->documents = $model->listItems();

	    $this->_documentListView = CrfpgeHelpersView::load('Document','_entry','phtml');
		$this->_addDocumentView = CrfpgeHelpersView::load('Document','_add','phtml');
		$this->_editDocumentView = CrfpgeHelpersView::load('Document','_edit','phtml');
	
      break;
    }
    //display
    return parent::render();
  } 
}