<?php // no direct access

defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class CrfpgeControllersEvent_calendar extends CrfpgeControllersDefault
{
  public function execute()
  {
    $app      = JFactory::getApplication();
    $return   = array("success"=>false);

    $modelName  = $app->input->get('model', 'Calendar');
    $view       = $app->input->get('view', 'Calendar');
    $layout     = $app->input->get('layout', 'list');
    $item       = $app->input->get('item', 'action');

    $modelName  = 'CrfpgeModels'.ucwords($modelName);

  	$model = new $modelName();
	 
	foreach($model->listItems() as $i=>$dataItem):

        $event_array[] = array(
            'id' => $dataItem->action_id,
            'title' => $dataItem->designation,
            'start' => $dataItem->date_debut,
            'end' => $dataItem->date_fin,
            'allDay' => false
        );
	
	endforeach;
	
    // Get the document object.
    $document = JFactory::getDocument();
    // Set the MIME type for JSON output.
    $document->setMimeEncoding('application/json');
    // Change the suggested filename.
    JResponse::setHeader('Content-Disposition','attachment;filename="result.json"');
    // Output the JSON data.
    echo json_encode($event_array);
    exit;
	 
  
  }
}