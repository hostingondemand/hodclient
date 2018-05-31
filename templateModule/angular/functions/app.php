<?php
namespace modules\hodclient\templateModule\angular\functions;

use framework\core\Loader;

class FuncApp extends \framework\lib\template\AbstractFunction
{
    function call($parameters, $data, $content = "", $unparsed = "", $module = false)
    {
        $module= $this->clientmodule->angular->initialize();
        Loader::goModule(Loader::$actionModule);
        $path=$this->filesystem->findRightPath("content/app/".$parameters[0]);
        Loader::goBackModule();
        if($path){
            $files=$this->filesystem->getFiles($path);
            foreach($files as $file){
                if($file=="controller.js"){
                    $priority=8001;
                    $this->service->client->pushVal("ng_dependency",$parameters[0]."Controller");
                }
                elseif($file=="directive.js"){
                    $priority=8002;
                    $this->service->client->pushVal("ng_dependency",$parameters[0]."Directive");
                }elseif($file=="service.js"){
                    $priority=8004;
                }else{
                    $priority=8003;
                }
                $this->service->client->addScript("app/".$parameters[0]."/".$file,Loader::$actionModule,$priority);
            }
        }

    }
}

?>