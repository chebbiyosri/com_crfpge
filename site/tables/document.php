<?php defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class TableDocument extends JTable
{                      
  /**
  * Constructor
  *
  * @param object Database connector object
  */
  function __construct( &$db ) {
    parent::__construct('#__crfpge_document', 'document_id', $db);
  }
}