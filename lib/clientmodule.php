<?php namespace modules\hodclient\lib;
use hodphp\core\Lib;
use hodphp\core\Loader;

class Clientmodule extends Lib
{
    function __construct()
    {
        Loader::loadClass("baseClientmodule","modules/hodclient/lib/clientmodule");
    }

    public function __get($name)
    {
        return Loader::getSingleton($name, "clientmodule");
    }
}