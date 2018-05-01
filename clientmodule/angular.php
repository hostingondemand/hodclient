<?php

namespace modules\hodclient\clientmodule;

use modules\hodclient\lib\clientmodule\BaseClientmodule;

class Angular extends BaseClientmodule
{
    function initialize()
    {
        $this->service->client->downloadModule("angular");
        $this->service->client->addScript("angular/angular.js", "hodclient", 9990);
        $this->service->client->addScript("angular/js/app.js", "hodclient", 8000);
        if (!$this->service->client->isVarSet("ng_dependency")) {
            $this->service->client->setVar("ng_dependency", array());
        }
    }

    public function __call($method, $arguments)
    {
        $filename = "angular-" . $method . ".js";
        if (!file_exists("data/cache/hodclient/angular/" . $filename)) {

            $url = $this->config->get("angular.moduleUrl", "_hodclient");
            $version = $this->service->client->getModuleVersion("angular");
            $url = str_replace("{{version}}", $version, $url);
            $url = str_replace("{{module}}", $method, $url);

            $this->http->download($url, "data/cache/hodclient/angular/" . $filename);
        }
        $this->service->client->addScript("angular/" . $filename, "hodclient", 9989);
        $this->service->client->pushVal("ng_dependency", "ng" . ucfirst($method));
    }
}

?>