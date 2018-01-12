<?php // no direct access

defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class CrfpgeModelsDocument extends CrfpgeModelsDefault
{

  //Define class level variables
  var $_document_id  = null;
  var $_action_id  = null;
  var $_user_id     = null;
  var $_state_code   = 1;
  
  var $_pagination  = null;
  var $_total       = null;

  function __construct()
  {
    parent::__construct();      

    $app = JFactory::getApplication();
    $this->_document_id = $app->input->get('document_id',null);
	$this->_action_id = $app->input->get('action_id',null);
    $this->_user_id = $app->input->get('user_id',JFactory::getUser()->id);
  }


  protected function _buildQuery()
  {
    $db = JFactory::getDBO();
    $query = $db->getQuery(TRUE);

    $query->select("d.document_id, d.nom_fichier, d.confidentiel, d.description, d.tags, d.titre, d.state_code, d.created, d.created_by, d.modified, d.modified_by");
    $query->from("ws_crfpge_document as d");
	
	$query->select("a.designation, a.description");
    $query->innerjoin("ws_crfpge_action as a ON a.action_id = d.action_id");
	
    $query->select("u.username, u.name");
    $query->leftjoin("ws_users as u ON u.id = d.created_by");

    $query->select("p.*");
    $query->leftjoin("ws_user_profiles as p on p.user_id = u.id");
    JFactory::getApplication()->enqueueMessage($query);

    return $query;

  }


  protected function _buildWhere(&$query)
  {

    //if(is_numeric($this->_user_id)) 
    //{
    //  $query->where('d.created_by = ' . (int) $this->_user_id);
    //}
    
    if(is_numeric($this->_document_id)) 
    {
      $query->where('d.document_id = ' . (int) $this->_document_id);
    }
    if(is_numeric($this->_action_id)) 
    {
      $query->where('d.action_id = ' . (int) $this->_action_id);
    }
    $query->where('d.state_code = '. (int) $this->_state_code);

    return $query;
  }

  public function delete($id = null)
  {
    $app  = JFactory::getApplication();
    $id   = $id ? $id : $app->input->get('document_id');
    
    $document = JTable::getInstance('Document','Table');
    $document->load($id);

    if($document->delete()) 
    {
      return true;
    } else {
      return false;
    }
  }
   
}