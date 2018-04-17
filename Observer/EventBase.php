<?php

abstract class EventBase
{
    public function __call($name, $arguments)
    {
        //要被调用的class
        /*$call_name = get_called_class();
        $start_class = get_class($arguments[0]);

        $flag = strtolower($start_class.'_'.$call_name);
        CommonHelper::callMethod($call_name,NotifyConfig::$_SETTINGS[$flag]['exec_func'],[]);*/
    }
}