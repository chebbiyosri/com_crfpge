<?php defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class TableComite extends JTable
{                      
  /**
  * Constructor
  *
  * @param object Database connector object
  */
  function __construct( &$db ) {
    parent::__construct('#__crfpge_comite', 'comite_id', $db);
  }
}