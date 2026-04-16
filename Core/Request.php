<?php

namespace Core;

class Request{
    public static function get($key, $default= null)
    {
        return isset($_GET[$key]) ? $_GET[$key] : $default;
    }

    public static function getNotas($key, $default= null)
    {
        return isset($_GET[$key]) ? " &{$key} " . $_GET[$key] : $default;
    }
}