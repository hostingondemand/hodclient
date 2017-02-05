<?php
namespace modules\hodclient\clientmodule;
    use modules\hodclient\lib\clientmodule\BaseClientmodule;

    class Charts extends BaseClientmodule{

        function initialize()
        {
            //make sure jquery is there
            $jquery= $this->clientmodule->jquery;
            $jquery->initialize();

            //load charts js
           $this->service->client->addScript("charts/js/Chart.bundle.min.js","hodclient",9990);
        }

    }
?>