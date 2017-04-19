<?php
namespace modules\hodclient\templateModule\bootstrap\functions;

use hodphp\core\Loader;

class FuncLabel extends \hodphp\lib\template\AbstractFunction
{

    function call($parameters, $data, $content = "", $unparsed = "",$module=false)
    {
        return $this->template->parseFile("bootstrap/label",array("name"=>$parameters[0]));
    }


}

?>