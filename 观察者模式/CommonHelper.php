<?php

/**
 * 示例
 *
 * Class CommonHelper
 */


class CommonHelper
{
    /**
     * 调用类的方法，自动判断是否静态方法
     */
    public static function callMethod($class, $method, $arguments)
    {
        $obj = new \ReflectionMethod($class, $method);
        $is_static = $obj->isStatic();
        if ($is_static) {
            return forward_static_call_array([$class, $method], $arguments);
        } else {
            if (!is_object($class)) {
                $class = new $class;
            }
            return call_user_func_array([$class, $method], $arguments);
        }
    }
}