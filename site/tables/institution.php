<?php defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class TableInstitution extends JTable
{                      
  /**
  * Constructor
  *
  * @param object Database connector object
  */
  function __construct( &$db ) {
    parent::__construct('#__crfpge_institution', 'institution_id', $db);
  }
}