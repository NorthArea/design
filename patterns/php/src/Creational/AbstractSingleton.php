<?php


namespace App\Creational;


abstract class AbstractSingleton
{
    private static array $instances = [];

    public static function getInstances(): self
    {
        $class = static::class;
        if(!isset(self::$instances[$class])){
            self::$instances[$class] = new $class();
        }

        return self::$instances[$class];
    }

    private function __construct() {}
    private function __clone(){}
    private function __wakeup(){}
}