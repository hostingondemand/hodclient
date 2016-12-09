<?php
namespace modules\hodclient\templateModule\bootstrap\functions;

use core\Loader;

class FuncMenuLink extends \lib\template\AbstractFunction
{

    function call($parameters, $data, $content = "", $unparsed = "",$module=false)
    {

        $name=$parameters[0];
        $active=false;
        if(!isset($parameters[1])){
            $url="#";
        }else{
           array_shift($parameters);
                $active=
                    (isset($parameters[0]) && isset($parameters[1]) && isset($parameters[2]) &&
                        $parameters[0]==Loader::$actionModule &&
                        $parameters[1]==Loader::$controller&&
                        $parameters[2]==Loader::$action)||
                    (isset($parameters[0]) && isset($parameters[1]) && !isset($parameters[2]) &&
                        $parameters[0]==Loader::$controller &&
                        $parameters[1]==Loader::$action) ||
                    (isset($parameters[0]) && isset($parameters[1]) && !isset($parameters[2]) &&
                        $parameters[0]==Loader::$actionModule &&
                        $parameters[1]==Loader::$controller) ||
                    (isset($parameters[0]) && !isset($parameters[2]) && !isset($parameters[1]) &&
                        (
                        !Loader::$actionModule && $parameters[0]==Loader::$controller
                        ||
                        $parameters[0]==Loader::$actionModule
                        )
                    )
                  ;
                    $url=$this->route->createRoute($parameters);
        }





        return $this->template->parseFile("bootstrap/menuLink",array("label"=>$name,"url"=>$url,"active"=>$active));
    }


}

?>