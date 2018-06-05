<?php

namespace modules\hodclient\service;

use framework\lib\service\BaseService;

class Client extends BaseService
{
    var $scripts = array();
    var $stylesheets = array();
    var $vars = array();

    function addScript($script, $module, $priority)
    {
        $arr = array("path" => $script, "priority" => $priority, "module" => $module);
        if (isset($this->scripts[$script]) && $this->scripts[$script]["priority"] < $priority || !isset($this->scripts[$script])) {
            $this->scripts[$script] = $arr;
        }
    }

    function addStylesheet($stylesheet, $module, $priority)
    {
        $arr = array("path" => $stylesheet, "priority" => $priority, "module" => $module);
        if (isset($this->stylesheets[$stylesheet]) && $this->stylesheets[$stylesheet]["priority"] < $priority || !isset($this->stylesheets[$stylesheet])) {
            $this->stylesheets[$stylesheet] = $arr;
        }
    }

    function setVar($key, $val)
    {
        $this->vars[$key] = $val;
    }

    function pushVal($key, $val)
    {
        if (!isset($this->vars[$key])) {
            $this->vars[$key] = array();
        }
        $this->vars[$key][] = $val;
    }

    function isVarSet($key)
    {
        return isset($this->vars[$key]);
    }

    function getVars()
    {
        return $this->vars;
    }

    function getScripts()
    {
        return $this->scripts;
    }

    function getStylesheets()
    {
        return $this->stylesheets;
    }

    function getModuleVersion($module){
        $version = $this->config->get($module . ".version", "hodclient");
        if (!$version) {
            $version = $this->config->get($module . ".version", "_hodclient");
        }
        return $version;
    }

    function downloadModule($module)
    {

        if (!$this->filesystem->exists("data/cache/hodclient/" . $module)) {
            $this->filesystem->mkdir("data/cache/hodclient/" . $module);
            $version=$this->getModuleVersion($module);
            foreach ($this->config->get($module . ".files", "_hodclient") as $key => $val) {
                $this->downloadFile($module, $key, $val, $version);
            }
        }
    }


    function downloadFile($module, $filename, $url, $version)
    {
        $url = str_replace("{{version}}", $version, $url);
        $this->http->download($url, "data/cache/hodclient/" . $module . "/" . $filename);
    }

}

?>