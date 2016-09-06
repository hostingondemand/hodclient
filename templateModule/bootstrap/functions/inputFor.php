<?php
namespace modules\maxclient\templateModule\bootstrap\functions;

use core\Loader;

class FuncInputFor extends \lib\template\AbstractFunction
{

    function call($parameters, $data, $content = "", $unparsed = "",$module=false)
    {
        return $this->template->parseFile("bootstrap/inputFor",array_merge($data,array("_field"=>$parameters[0],"_type"=>$parameters[1])));
    }


}

?>