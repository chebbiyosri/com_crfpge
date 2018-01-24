<?php // no direct access

defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class CrfpgeModelsCalendar extends CrfpgeModelsDefault
{
  var $_user_id    = null;
  var $_state_code  = 1;

  function __construct()
  {
    parent::__construct();      

    $app = JFactory::getApplication();
    $this->_user_id = $app->input->get('user_id',JFactory::getUser()->id);
  }

 function getItem() 
  {
    $calendar = parent::getItem(); 

    $calendarModel = new CrfpgeModelscalendar();
    $calendarModel->set('_user_id',$this->_user_id);
	
    return $calendar;
  }

  protected function _buildQuery()
  {
    $db = JFactory::getDBO();
    $query = $db->getQuery(TRUE);

    $query->select('c.action_id, c.comite_id, c.designation, c.description, c.date_debut, c.date_fin, 
                    c.use_alerte, c.interval_alerte, c.date_alerte, c.state_code, c.created, c.created_by');
    $query->from('#__crfpge_action as c');

    //JFactory::getApplication()->enqueueMessage($query);

    return $query;

  }


  protected function _buildWhere(&$query)
  {
    $query->where('c.state_code = '. (int) $this->_state_code);

    return $query;
  }

  
}