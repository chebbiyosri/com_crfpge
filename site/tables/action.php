<?php defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class TableAction extends JTable
{                      
  /**
  * Constructor
  *
  * @param object Database connector object
  */
  function __construct( &$db ) {
    parent::__construct('#__crfpge_action', 'action_id', $db);
  }
}