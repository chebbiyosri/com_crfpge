<?php

defined('_JEXEC') or die;

class CrfpgeHelpersCrfpge
{
	public static $extension = 'com_crfpge';

	/**
	 * @return  JObject
	 */
	public static function getActions()
	{
		$user	= JFactory::getUser();
		$result	= new JObject;

		$assetName = 'com_crfpge';
		$level = 'component';

		$actions = JAccess::getActions('com_crfpge', $level);

		foreach ($actions as $action)
		{
			$result->set($action->name,	$user->authorise($action->name, $assetName));
		}

		return $result;
	}
}