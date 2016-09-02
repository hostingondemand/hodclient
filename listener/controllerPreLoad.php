<?php namespace modules\maxclient\listener;
class ControllerPreLoad extends \lib\event\BaseListener
{
    var $handled = false;

    function handle($data)
    {
        if (!$this->handled) {
            $module = $this->template->getModule("maxclient");
            $this->template->registerGlobalModule($module);
            $this->handled = true;
        }
    }


}