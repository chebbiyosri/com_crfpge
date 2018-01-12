<?php // no direct access

defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class CrfpgeModelsAction extends CrfpgeModelsDefault
{

  /**
  * Protected fields
  **/
  var $_action_id  = null;
  
  var $_user_id    = null;
  
  var $_comite_id  = null;
  
  var $_pagination  = null;

  var $_total       = null;

  var $_state_code  = 1;




  function __construct()
  {
    $app = JFactory::getApplication();
    $this->_action_id = $app->input->get('action_id', null);
    
    parent::__construct();       
  }
 
  /**
  * Builds the query to be used by the book model
  * @return   object  Query object
  *
  *
  */
  protected function _buildQuery()
  {
    $db = JFactory::getDBO();
    $query = $db->getQuery(TRUE);

    $query->select('c.action_id, c.comite_id, c.designation, c.description, c.date_debut, c.date_fin, 
                    c.use_alerte, c.interval_alerte, c.date_alerte, c.state_code, c.created, c.created_by');
    $query->from('#__crfpge_action as c');

    JFactory::getApplication()->enqueueMessage($query);

    return $query;
  }

  public function getItem()
  {
    $action = parent::getItem();

    $activiteModel = new CrfpgeModelsActivite();
    $activiteModel->set('_action_id',$action->action_id);
    $action->activites = $activiteModel->listItems();
	
	$documentModel = new CrfpgeModelsDocument();
	$documentModel->set('_action_id',$action->action_id);
    $action->documents = $documentModel->listItems();
	
	$membreModel = new CrfpgeModelsMembre();
	$membreModel->set('_action_id',$action->action_id);
    $action->membres = $membreModel->listItems();

    return $action;
  }
  


  /**
  * Builds the filter for the query
  * @param    object  Query object
  * @return   object  Query object
  *
  */
  protected function _buildWhere(&$query)
  {

	
    if(is_numeric($this->_action_id)) 
    {
      $query->where('c.action_id = ' . (int) $this->_action_id);
    }

    if(is_numeric($this->_user_id)) 
    {
      $query->where('c.created_by = ' . (int) $this->_user_id);
    }

    if(is_numeric($this->_comite_id)) 
    {
      $query->where('c.comite_id = ' . (int) $this->_comite_id);
    }


    $query->where('c.state_code = ' . (int) $this->_state_code);
    JFactory::getApplication()->enqueueMessage($query);
    return $query;
  }



  /**
  * Delete an action
  * @param int      ID of the action to delete
  * @return boolean True if successfully deleted
  */
  public function delete($id = null)
  {
    $app  = JFactory::getApplication();
    $id   = $id ? $id : $app->input->get('action_id');

    $action = JTable::getInstance('Action','Table');
    $action->load($id);

    if($action->delete()) 
    {
      return true;
    } else {
      return false;
    }
  }
}