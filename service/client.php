<?php
    namespace modules\maxclient\service   ;
    class Client{
        var $scripts=array();
        var $stylesheets=array();

        function addScript($script,$module,$priority){
            $arr=array("path"=>$script,"priority"=>$priority,"module"=>$module);
            if(isset($this->scripts[$script]) && $this->scripts[$script]["priority"]<$priority || !isset($this->scripts[$script])) {
                $this->scripts[$script] = $arr;
            }
        }

        function addStylesheet($stylesheet,$module,$priority){
            $arr=array("path"=>$stylesheet,"priority"=>$priority,"module"=>$module);
            if(isset($this->stylesheets[$stylesheet]) && $this->stylesheets[$stylesheet]["priority"]<$priority || !isset($this->stylesheets[$stylesheet])) {
                $this->stylesheets[$stylesheet] = $arr;
            }
        }

        function getScripts(){
            return $this->scripts;
        }

        function getStylesheets(){
            return $this->stylesheets;
        }
    }
?>