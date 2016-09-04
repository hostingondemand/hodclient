<?php
namespace modules\maxclient\templateModule\bootstrap\functions;

use core\Loader;

class FuncInputFor extends \lib\template\AbstractFunction
{

    function call($parameters, $data, $content = "", $unparsed = "",$module=false)
    {
        return $this->template->parseFile("component/inputFor",array("field"=>$parameters[0],"type"=>$parameters[1]));
    }


}

?>