<?php defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class TableMembre extends JTable
{                      
  /**
  * Constructor
  *
  * @param object Database connector object
  */
  function __construct( &$db ) {
    parent::__construct('#__crfpge_membre', 'membre_id', $db);
  }
}