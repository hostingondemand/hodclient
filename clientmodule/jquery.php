<?php
namespace modules\hodclient\clientmodule;
    use modules\hodclient\lib\clientmodule\BaseClientmodule;

    class Jquery extends BaseClientmodule{

        function initialize()
        {
           $this->service->client->addScript("jquery/js/jquery.js","hodclient",9999);
        }

        function ui(){
            $this->service->client->addScript("jquery/js/jquery-ui.js","hodclient",9998);
            $this->service->client->addStylesheet("jquery/css/jquery-ui.js","hodclient",9998);
        }

        function tagify(){
            $this->service->client->addScript("jquery/js/tagify.min.js","hodclient",9998);
     	    $this->service->client->addScript("jquery/js/jQuery.tagify.min.js","hodclient",9997);
     	    $this->service->client->addScript("jquery/js/tagifyInit.js","hodclient",9996);
            $this->service->client->addStylesheet("jquery/css/tagify.css","hodclient",9999);
        }

    }
?>
