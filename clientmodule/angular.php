<?php
namespace modules\hodclient\clientmodule;
    use modules\hodclient\lib\clientmodule\BaseClientmodule;

    class Angular extends BaseClientmodule{
        function initialize()
        {
           $this->service->client->addScript("angular/js/angular.js","hodclient",9990);
           $this->service->client->addScript("angular/js/app.js","hodclient",8000);
            if(!$this->service->client->isset("ng_dependency")) {
                $this->service->client->setVar("ng_dependency", array());
            }
        }

        public function __call($method,$arguments){
            //use find right path to find the file on module level
            if($this->filesystem->findRightPath("content/angular/js/angular-".$method.".js")){
                $this->service->client->addScript("angular/js/angular-".$method.".js","hodclient",9989);
                $this->service->client->pushVal("ng_dependency","ng".ucfirst($method));
            }
            if($this->filesystem->findRightPath("content/angular/css/angular-".$method.".css")){
                $this->service->client->addScript("jquery/js/jquery-ui.js","hodclient",9989);
            }
        }
    }
?>