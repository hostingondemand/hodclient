<?php
namespace modules\hodclient\clientmodule;
    use modules\hodclient\lib\clientmodule\BaseClientmodule;

    class Angular extends BaseClientmodule{
        function initialize()
        {
           $this->service->client->addScript("content/angular/js/angular.js","hodclient",9990);
        }

        function __call($method,$arguments){
            //use find right path to find the file on module level
            if($this->filesystem->findRightPath("content/angular/js/angular-".$method.".js")){
                $this->service->client->addScript("content/angular/js/angular-".$method.".js","hodclient",9989);
            }
            if($this->filesystem->findRightPath("content/angular/css/angular-".$method.".css")){
                $this->service->client->addScript("jquery/js/jquery-ui.js","hodclient",9989);
            }
        }
    }
?>