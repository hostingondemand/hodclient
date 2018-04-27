<?php
namespace modules\hodclient\clientmodule;

use modules\hodclient\lib\clientmodule\BaseClientmodule;

class Jquery extends BaseClientmodule
{

    function initialize()
    {
        $this->service->client->downloadModule("jquery");
        $this->service->client->addScript("jquery/jquery.js", "hodclient", 9999);
    }

    function ui()
    {
        $this->service->client->downloadModule("jquery-ui");
        $this->service->client->addScript("jquery-ui/jquery-ui.js", "hodclient", 9998);
        $this->service->client->addStylesheet("jquery-ui/jquery-ui.css", "hodclient", 9998);
    }


    //todo: see if we can find a relieable download source for this one
    function tagify()
    {
        $this->service->client->addScript("jquery/js/tagify.min.js", "hodclient", 9998);
        $this->service->client->addScript("jquery/js/jQuery.tagify.min.js", "hodclient", 9997);
        $this->service->client->addScript("jquery/js/tagifyInit.js", "hodclient", 9996);
        $this->service->client->addStylesheet("jquery/css/tagify.css", "hodclient", 9999);
    }

}

?>
