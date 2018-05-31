<?php
namespace modules\hodclient\templateModule\bootstrap\functions;

use framework\core\Loader;

class FuncLabel extends \framework\lib\template\AbstractFunction
{

    function call($parameters, $data, $content = "", $unparsed = "",$module=false)
    {
        return $this->template->parseFile("bootstrap/label",array("name"=>$parameters[0]));
    }


}

?>