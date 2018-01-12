<?php defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class TableActivite extends JTable
{                      
  /**
  * Constructor
  *
  * @param object Database connector object
  */
  function __construct( &$db ) {
    parent::__construct('#__crfpge_activite', 'activite_id', $db);
  }
}