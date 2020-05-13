<?php

namespace App\Core;
class App
{
    public static $resgistry = [];

    public static function bind($key, $value)
    {
        self::$resgistry[$key] = $value;
    }

    public static function get($key)
    {
        if (! array_key_exists($key, self::$resgistry)) {
            throw new \Exception('No {$key} is bound in the container');
        }
        return self::$resgistry[$key];
    }
}