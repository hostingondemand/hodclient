<?php namespace modules\maxclient\lib;
use core\Lib;
use core\Loader;

class Clientmodule extends Lib
{
    function __construct()
    {
        Loader::loadClass("baseClientmodule","modules/maxclient/lib/clientmodule");
    }

    public function __get($name)
    {
        return Loader::getSingleton($name, "clientmodule");
    }
}