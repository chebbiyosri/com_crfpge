<?php // no direct access

defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class CrfpgeModelsMembre extends CrfpgeModelsDefault
{

  /**
  * Protected fields
  **/
  var $_membre_id  = null;
  
  var $_institution_id  = null;
  
  var $_action_id  = null;
  
  var $_user_id    = null;

  var $_state_code  = 1;




  function __construct()
  {
    parent::__construct();       
  }
 
  /**
  * Builds the query to be used by the member model
  * @return   object  Query object
  *
  *
  */
  protected function _buildQuery()
  {
    $db = JFactory::getDBO();
    $query = $db->getQuery(TRUE);

    $query->select('m.membre_id,m.action_id, m.institution_id, m.email, m.fonction, m.representant, m.tel, m.state_code, m.created, m.created_by');
    $query->from('#__crfpge_membre as m');
	
	$query->select('i.designation as institution');
    $query->innerjoin('#__crfpge_institution as i ON i.institution_id = m.institution_id');

    JFactory::getApplication()->enqueueMessage($query);

    return $query;
  }


  /**
  * Builds the filter for the query
  * @param    object  Query object
  * @return   object  Query object
  *
  */
  protected function _buildWhere(&$query)
  {
	
    if(is_numeric($this->_membre_id)) 
    {
      $query->where('m.membre_id = ' . (int) $this->_membre_id);
    }

    if(is_numeric($this->_action_id)) 
    {
      $query->where('m.action_id = ' . (int) $this->_action_id);
    }
	/**
    if(is_numeric($this->_institution_id)) 
    {
      $query->where('m.institution_id = ' . (int) $this->_institution_id);
    }
	**/
    $query->where('m.state_code = ' . (int) $this->_state_code);
    return $query;
  }

  /**
  * Delete a member
  * @param int      ID of the member to delete
  * @return boolean True if successfully deleted
  */
  public function delete($id = null)
  {
    $app  = JFactory::getApplication();
    $id   = $id ? $id : $app->input->get('membre_id');

    $membre = JTable::getInstance('Membre','Table');
    $membre->load($id);

    if($membre->delete()) 
    {
      return true;
    } else {
      return false;
    }
  }
}