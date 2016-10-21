<?php
    namespace modules\hodclient\service   ;
    class Client{
        var $scripts=array();
        var $stylesheets=array();
        var $vars=array();

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

        function setVar($key,$val){
            $this->vars[$key]=$val;
        }

        function pushVal($key,$val){
            if(!isset($this->vars[$key])){
                $this->vars[$key]=array();
            }
            $this->vars[$key][]=$val;
        }
    }
?>