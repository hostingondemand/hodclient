<?php
namespace modules\maxclient\clientmodule;
    use modules\maxclient\lib\clientmodule\BaseClientmodule;

    class Bootstrap extends BaseClientmodule{

        function initialize()
        {
           $this->service->client->addScript("bootstrap/js/bootstrap.js","maxclient",9990);
           $this->service->client->addStylesheet("bootstrap/css/bootstrap.css","maxclient",9989);
            $this->service->client->addStylesheet("bootstrap/css/bootstrap-theme.css","maxclient",9988);
        }
    }
?>