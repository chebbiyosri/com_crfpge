<?php // No direct access

defined( '_JEXEC' ) or die( 'Restricted access' );

//sessions
jimport( 'joomla.session.session' );
 
//load tables
JTable::addIncludePath(JPATH_COMPONENT.'/tables');

//load classes
JLoader::registerPrefix('Crfpge', JPATH_COMPONENT);

//Load plugins
JPluginHelper::importPlugin('crfpge');
 
//Load styles and javascripts
CrfpgeHelpersStyle::load();

//application
$app = JFactory::getApplication();
$router = $app->getRouter();
$router->setMode(0);
 
// Require specific controller if requested
$controller = $app->input->get('controller','default');

// Create the controller
$classname  = 'CrfpgeControllers'.ucwords($controller);
$controller = new $classname();
 
// Perform the Request task
$controller->execute();