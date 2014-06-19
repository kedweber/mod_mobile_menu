<?php

class ModMenu_mobileHtml extends ModDefaultHtml
{
	public function display()
	{
        $menu = JFactory::getApplication()->getMenu();
        $this->module->params->menutype = $this->module->params->menu;
        $this->module->params->endLevel = 2;
        $this->module->params->showAllChildren = true;

        $this->assign('menu', ModMenuHelper::getList($this->module->params));
        $this->assign('active', $menu->getActive());
        $this->assign('lang', JFactory::getLanguage());
        $this->assign('template', JFactory::getDocument()->template);
        $this->assign('params', $this->module->params);

		return parent::display();
	}
}