<?php
namespace modules\hodclient\templateModule\hodclient\functions;

use core\Loader;

class FuncModelToJs extends \lib\template\AbstractFunction
{
    var $initialized = array();

    function call($parameters, $data, $content = "", $unparsed = "", $module = false)
    {
        $name=$parameters[0];
        $data=$parameters[1];
        if(method_exists($data,"hasMethod")&&$data->hasMethod("getData")||method_exists($data,"getData")){
            $data=$data->getData();
        }
        $this->document->addVar($name,$data);
    }
}

?>