<?php // no direct access

defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class CrfpgeModelsActivite extends CrfpgeModelsDefault
{

  /**
  * Protected fields
  **/
  var $_action_id     = null;
  
  var $_user_id     = null;
  
  var $_state_code   = 1;



  function __construct()
  {

    parent::__construct();       
  }

  /**
  * Override the default store
  *
  */
  /**
  public function store()
  {
    $row = parent::store();
    $row->email = JUser::getInstance($row->user_id)->get('email');

    return $row;
  }
**/
  /**
  * Builds the query to be used by the review model
  * @return   object  Query object
  *
  *
  */
  protected function _buildQuery()
  {
    $db = JFactory::getDBO();
    $query = $db->getQuery(TRUE);

    $query->select('ac.activite_id, ac.action_id, ac.designation, ac.description, ac.state_code, ac.created, ac.created_by');
    $query->from('#__crfpge_activite as ac');

    //$query->select('u.email');
    //$query->leftjoin('#__users as u on u.id = aac.user_id');

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

    if(is_numeric($this->_action_id)) 
    {
      $query->where('ac.action_id = ' . (int) $this->_action_id);
    }
/**
    if(is_numeric($this->_user_id)) 
    {
      $query->where('ac.user_id = ' . (int) $this->_user_id);
    }

**/
    $query->where('ac.state_code = ' . (int) $this->_state_code);

    return $query;
  }
}