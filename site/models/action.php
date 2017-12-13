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
    $this->_action_id = $app->input->get('id', null);
    
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

    //$query->select('w.waitlist_id, w.user_id as borrower_id');
    //$query->leftjoin('#__lendr_waitlists as w on w.action_id = c.action_id AND w.fulfilled = 0');

    //$query->select('l.name as borrower');
    //$query->leftjoin('#__users as l on l.id = c.lent_uid');

    //$query->select('u.name as waitlist_user');
    //$query->leftjoin('#__users AS u on u.id = w.user_id');
    JFactory::getApplication()->enqueueMessage($query);
	//JFactory::getApplication()->enqueueMessage($this->_comite_id);
	//JFactory::getApplication()->enqueueMessage(strval($this->_comite_id));
	//JFactory::getApplication()->enqueueMessage(strval(is_numeric($this->_comite_id)));
    return $query;
  }

  public function getItem()
  {
    $action = parent::getItem();

    $activiteModel = new CrfpgeModelsActivite();
    $activiteModel->set('_action_id',$action->action_id);
    $action->activites = $activiteModel->listItems();

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

    //if($this->_waitlist)
    //{
    //  $query->where('w.waitlist_id <> ""');
    //}

    $query->where('c.state_code = ' . (int) $this->_state_code);
    JFactory::getApplication()->enqueueMessage($query);
    return $query;
  }

  /**
  * Lend the book
  * @param    array   Data array of book
  * @return   object  The book object loaned
  */
  public function lend($data = null)
  {
    $data = isset($data) ? $data : JRequest::get('post');

    if (isset($data['lend']) && $data['lend']==1)
    {
      $date = date("Y-m-d H:i:s");

      $data['lent'] = 1;
      $data['lent_date'] = $date;
      $data['lent_uid'] = $data['borrower_id'];

      $waitlistData = array('waitlist_id'=>$data['waitlist_id'], 'fulfilled' => 1, 'fulfilled_time' => $date, 'table' => 'Waitlist');
      $waitlistModel = new LendrModelsWaitlist();
      $waitlistModel->store($waitlistData);
    } else {
      $data['lent'] = 0;
      $data['lent_date'] = NULL;
      $data['lent_uid'] = NULL;

    }
    
    $row = parent::store($data);    
    
    return $row;

  }

  /**
  * Delete a book
  * @param int      ID of the book to delete
  * @return boolean True if successfully deleted
  */
  public function delete($id = null)
  {
    $app  = JFactory::getApplication();
    $id   = $id ? $id : $app->input->get('action_id');

    $book = JTable::getInstance('Book','Table');
    $book->load($id);

    $book->published = 0;

    if($book->store()) 
    {
      return true;
    } else {
      return false;
    }
  }
}