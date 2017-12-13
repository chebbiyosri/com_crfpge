<?php
// no direct access
defined('_JEXEC') or die('Restricted access');

class CrfpgeHelpersStyle
{
	static function load()
	{
		$document = JFactory::getDocument();

		$document->addStyleSheet(JURI::base().'/media/jui/css/bootstrap.min.css');
		$document->addStylesheet(JURI::base().'components/com_crfpge/assets/css/style.css');
		//javascripts
	
		$document->addScript(JURI::base().'components/com_crfpge/assets/js/crfpge.js');

	}
}