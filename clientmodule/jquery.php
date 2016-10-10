<?php
namespace modules\hodclient\clientmodule;
    use modules\hodclient\lib\clientmodule\BaseClientmodule;

    class Jquery extends BaseClientmodule{

        function initialize()
        {
           $this->service->client->addScript("jquery/js/jquery.js","hodclient",9999);
        }
    }
?>