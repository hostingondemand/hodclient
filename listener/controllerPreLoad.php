<?php namespace modules\hodclient\listener;
class ControllerPreLoad extends \lib\event\BaseListener
{
    var $handled = false;

    function handle($data)
    {
        if (!$this->handled) {
            $module = $this->template->getModule("hodclient");
            $this->template->registerGlobalModule($module);

            $module = $this->template->getModule("bootstrap");
            $this->template->registerGlobalModule($module);

            $this->handled = true;
        }
    }


}