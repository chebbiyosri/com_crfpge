<?php defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class CrfpgeViewsComiteHtml extends JViewHtml
{
  function render()
  {
    $app = JFactory::getApplication();
    //$layout = $this->getLayout();
	$layout = $app->input->get('layout');
	$model = new CrfpgeModelsComite();
	switch($layout) {
      case "comite":
        $this->comite = $model->getItem();
      
        $this->_actionListView = CrfpgeHelpersView::load('Action','list','phtml');
		$this->_actionListView->actions = $this->comite->actions;
		
		/**
		foreach($this->comite->actions as $action)
        {
	
         echo $action->designation;
	    }
		**/
		

      break;
      case "list":
      default:
        $this->comites = $model->listItems();
	    $this->_comiteListView = CrfpgeHelpersView::load('Comite','_entry','phtml');
		$this->_addComiteView = CrfpgeHelpersView::load('Comite','_add','phtml');
      break;
    }
    //display
    return parent::render();
  } 
}