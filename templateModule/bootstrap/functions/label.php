<?php
namespace modules\hodclient\templateModule\bootstrap\functions;

use core\Loader;

class FuncLabel extends \lib\template\AbstractFunction
{

    function call($parameters, $data, $content = "", $unparsed = "",$module=false)
    {
        return $this->template->parseFile("bootstrap/label",array("name"=>$parameters[0]));
    }


}

?>