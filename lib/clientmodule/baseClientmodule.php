<?php
namespace modules\hodclient\lib\clientmodule;
use hodphp\core\Base;

abstract  class BaseClientmodule extends Base
{
    abstract function initialize();
}