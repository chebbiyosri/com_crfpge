<?php // no direct access

defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class CrfpgeModelsInstitution extends CrfpgeModelsDefault
{

  //Define class level variables
  var $_user_id     = null;
  var $_state_code   = 1;
  var $_institution_id  = null;
  var $_pagination  = null;
  var $_total       = null;

  function __construct()
  {
    parent::__construct();      

    $app = JFactory::getApplication();
	$this->_institution_id = $app->input->get('institution_id',null);
    $this->_user_id = $app->input->get('user_id',JFactory::getUser()->id);
  }

 function getItem() 
  {
    $institution = parent::getItem(); 

    $institutionModel = new CrfpgeModelsInstitution();
    $institutionModel->set('_user_id',$this->_user_id);
	
    return $institution;
  }

  protected function _buildQuery()
  {
    $db = JFactory::getDBO();
    $query = $db->getQuery(TRUE);

    $query->select("i.institution_id, i.designation, i.state_code, i.created, i.created_by,i.modified, i.modified_by");
    $query->from("ws_crfpge_institution as i");

    $query->select("u.username, u.name");
    $query->leftjoin("ws_users as u ON u.id = i.created_by");

    $query->select("p.*");
    $query->leftjoin("ws_user_profiles as p on p.user_id = u.id");
    JFactory::getApplication()->enqueueMessage($query);

    return $query;

  }


  protected function _buildWhere(&$query)
  {

    //if(is_numeric($this->_user_id)) 
    //{
    //  $query->where('i.created_by = ' . (int) $this->_user_id);
    //}
    
    if(is_numeric($this->_institution_id)) 
    {
      $query->where('i.institution_id = ' . (int) $this->_institution_id);
    }

    $query->where('i.state_code = '. (int) $this->_state_code);

    return $query;
  }

  public function delete($id = null)
  {
    $app  = JFactory::getApplication();
    $id   = $id ? $id : $app->input->get('institution_id');
    
    $institution = JTable::getInstance('Institution','Table');
    $institution->load($id);

    if($institution->delete()) 
    {
      return true;
    } else {
      return false;
    }
  }
   
}