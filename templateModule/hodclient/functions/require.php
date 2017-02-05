<?php
namespace modules\hodclient\templateModule\hodclient\functions;

use core\Loader;

class FuncRequire extends \lib\template\AbstractFunction
{
    var $initialized = array();

    function call($parameters, $data, $content = "", $unparsed = "", $module = false)
    {
        $callerModule = Loader::getCallerModule();
        $priority = isset($parameters[1]) ? $parameters[1] : 0;
        $exp = explode(".", $parameters[0]);

        if (count($exp) > 1) {
            $ext = $exp[count($exp) - 1];

            if (strtolower($ext) == "js") {
                $this->service->client->addScript($parameters[0], $callerModule, $priority);
            } else if ($ext == "css") {
                $this->service->client->addStylesheet($parameters[0], $callerModule, $priority);
            }else if($ext=="json"){
                $this->goModule($callerModule);
                $data=$this->filesystem->getFile("content/".$parameters[0]);
                $this->goBackModule();
                if($data){
                    if($decoded=json_decode($data,true)){
                        foreach($decoded as $key=>$val){
                            $this->service->client->setVar($key,$val);
                        }
                    }
                }

            }
        } else {
            $fullName = $exp[0];
            $expm = explode("/" , $fullName);
            $name = $expm[0];
            if ($this->clientmodule->$name) {
                $module= $this->clientmodule->$name;
                if (!@$this->initialized[$fullName]) {
                    $module->initialize();
                }
                if (@$expm[1]) {
                    $subModule = $expm[1];

                   $module->$subModule();
                }
            }
        }
    }
}

?>