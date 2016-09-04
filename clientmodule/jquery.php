<?php
namespace modules\maxclient\clientmodule;
    use modules\maxclient\lib\clientmodule\BaseClientmodule;

    class Jquery extends BaseClientmodule{

        function initialize()
        {
           $this->service->client->addScript("jquery/js/jquery.js","maxclient",9999);
        }
    }
?>