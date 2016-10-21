<?php namespace modules\hodclient\listener;
class headPreRender extends \lib\event\BaseListener
{
    var $handled = false;

    function handle($data)
    {
            $scripts=$this->service->client->getScripts();
            foreach($scripts as  $script){
                $this->document->addScript($script,$script["priority"]);
            }
            $stylesheets=$this->service->client->getStylesheets();
            foreach($stylesheets as $stylesheet){
                $this->document->addStylesheet($stylesheet,$stylesheet["priority"]);
            }

            $vars=$this->service->client->getVars();
            foreach($vars as $key=>$val){
                $this->document->addVar($key,$val);
            }
    }


}