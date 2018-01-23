<?php // no direct access

defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class CrfpgeModelsComite extends CrfpgeModelsDefault
{

  //Define class level variables
  var $_comite_id  = null;
  var $_user_id     = null;
  var $_state_code   = 1;
  
  var $_pagination  = null;
  var $_total       = null;

  function __construct()
  {
    parent::__construct();      

    $app = JFactory::getApplication();
    $this->_comite_id = $app->input->get('comite_id',null);
    $this->_user_id = $app->input->get('user_id',JFactory::getUser()->id);
  }

 function getItem() 
  {
    $comite = parent::getItem(); 

    $actionModel = new CrfpgeModelsAction();
    $actionModel->set('_user_id',$this->_user_id);
	$actionModel->_comite_id = $comite->comite_id;
    $comite->actions = $actionModel->listItems();

    return $comite;
  }

  protected function _buildQuery()
  {
    $db = JFactory::getDBO();
    $query = $db->getQuery(TRUE);

    $query->select("c.comite_id, c.designation, c.description, c.state_code, c.created, c.created_by");
    $query->from("ws_crfpge_comite as c");

    $query->select("u.username, u.name");
    $query->leftjoin("ws_users as u ON u.id = c.created_by");

    $query->select("p.*");
    $query->leftjoin("ws_user_profiles as p on p.user_id = u.id");
   // JFactory::getApplication()->enqueueMessage($query);

    return $query;

  }


  protected function _buildWhere(&$query)
  {

    //if(is_numeric($this->_user_id)) 
    //{
    //  $query->where('c.created_by = ' . (int) $this->_user_id);
    //}
    
    if(is_numeric($this->_comite_id)) 
    {
      $query->where('c.comite_id = ' . (int) $this->_comite_id);
    }

    $query->where('c.state_code = '. (int) $this->_state_code);

    return $query;
  }

  public function delete($id = null)
  {
    $app  = JFactory::getApplication();
    $id   = $id ? $id : $app->input->get('comite_id');
    
    $comite = JTable::getInstance('Comite','Table');
    $comite->load($id);

    if($comite->delete()) 
    {
      return true;
    } else {
      return false;
    }
  }
   
}