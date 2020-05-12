<?php

namespace App\Core;
class Request
{
    public static function uri()
    {
        return $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }

    public static function method()
    {
        return $method = $_SERVER['REQUEST_METHOD'];
    }
}