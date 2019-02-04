<?php

namespace App\Facades;

abstract class Facade
{
    protected static $container;
    protected static $resolved;

    public static function setContainer($container)
    {
        static::$container = $container;
    }

    public static function getFacadeInstance()
    {
        $accessor = static::getFacadeAccessor();

        if (static::$resolved[$accessor]) {
            static::$resolved[$accessor];
        }

        return static::$resolved[$accessor] = static::$container[$accessor];
    }

    public static function __callStatic($name, $arguments)
    {
        $instance = static::getFacadeInstance();
        return $instance->$name(...$arguments);
    }
}