<?php
namespace modules\hodclient\clientmodule;

use modules\hodclient\lib\clientmodule\BaseClientmodule;

class Bootstrap extends BaseClientmodule
{

    function initialize()
    {
        $this->service->client->addScript("bootstrap/js/bootstrap.js", "hodclient", 9990);
        $this->service->client->addStylesheet("bootstrap/css/bootstrap.css", "hodclient", 9989);
        $this->service->client->addStylesheet("bootstrap/css/bootstrap-theme.css", "hodclient", 9988);
        $this->service->client->addStylesheet("bootstrap/css/custom.css", "hodclient", 9988);
    }
}

?>