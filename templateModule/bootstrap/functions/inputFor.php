<?php
namespace modules\hodclient\templateModule\bootstrap\functions;

use core\Loader;

class FuncInputFor extends \lib\template\AbstractFunction
{

    function call($parameters, $data, $content = "", $unparsed = "",$module=false)
    {
        return $this->template->parseFile("bootstrap/inputFor",$data->set(array("_field"=>$parameters[0],"_type"=>$parameters[1],"_source"=>isset($parameters[2])?$parameters[2]:array())));
    }


}

?>