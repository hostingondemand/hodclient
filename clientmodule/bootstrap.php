<?php
namespace modules\hodclient\clientmodule;

use modules\hodclient\lib\clientmodule\BaseClientmodule;

class Bootstrap extends BaseClientmodule
{

    function initialize()
    {
        $this->service->client->addScript("bootstrap/js/bootstrap.js", "hodclient", 9990);
        $this->service->client->addStylesheet("bootstrap/css/bootstrap.css", "hodclient", 9989);


        if($this->filesystem->findRightPath("content/css/bootstrap-theme.css")) {
            $this->service->client->addStylesheet("css/bootstrap-theme.css", false, 9988);
        } elseif($this->filesystem->findRightPath("content/style/bootstrap-theme.css")){
                $this->service->client->addStylesheet("style/bootstrap-theme.css", false, 9988);
        }else {
            $this->service->client->addStylesheet("bootstrap/css/bootstrap-theme.css", "hodclient", 9988);
        }
        $this->service->client->addStylesheet("bootstrap/css/custom.css", "hodclient", 9988);
    }
}

?>