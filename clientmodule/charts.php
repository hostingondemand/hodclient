<?php
namespace modules\hodclient\clientmodule;
    use modules\hodclient\lib\clientmodule\BaseClientmodule;

    class Charts extends BaseClientmodule{

        function initialize()
        {
            //make sure jquery is there
            $jquery= $this->clientmodule->jquery;
            $jquery->initialize();

            $this->service->client->downloadModule("charts");

            //load charts js
           $this->service->client->addScript("charts/charts.js","hodclient",9990);
        }

    }
?>