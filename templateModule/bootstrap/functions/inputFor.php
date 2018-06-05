<?php

namespace modules\hodclient\templateModule\bootstrap\functions;

use framework\core\Loader;

class FuncInputFor extends \framework\lib\template\AbstractFunction
{

    function call($parameters, $data, $content = "", $unparsed = "", $module = false)
    {


        $input = array
        (
            "_field" => $parameters[0],
            "_type" => $parameters[1],
            "_source" => isset($parameters[2]) ? $parameters[2] : array(),
            "_attributes" => isset($parameters[3]) ? json_encode(
                array_merge(
                    ["class" => "form-control"],
                    json_decode(
                        str_replace("'", '"', $parameters[3]), true)
                )
            ) : "{'class':'form-control'}"
        );
        return $this->template->parseFile("bootstrap/inputFor", $data->set(
            $input
        ));
    }


}

?>