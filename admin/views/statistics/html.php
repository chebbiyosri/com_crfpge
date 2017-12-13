<?php defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class CrfpgeViewsStatisticsHtml extends JViewHtml
{
  function render()
  {
    $app = JFactory::getApplication();
   
    //retrieve task list from model
    $model = new CrfpgeModelsStatistics();
    $this->stats = $model->getStats();

    $this->addToolbar();

    //display
    return parent::render();
  } 

    /**
     * Add the page title and toolbar.
     *
     * @since   1.6
     */
    protected function addToolbar()
    {
        $canDo  = CrfpgeHelpersCrfpge::getActions();

        // Get the toolbar object instance
        $bar = JToolBar::getInstance('toolbar');

        JToolbarHelper::title(JText::_('COM_CRFPGE_STATISTICS'));
               
        if ($canDo->get('core.admin'))
        {
            JToolbarHelper::preferences('com_crfpge');
        }
    }
}