<?php


namespace App\Creational\Singleton\Registry;


class Registry extends Singleton
{
    private static array $instances = [];

    public static function getInstance(string $class): Singleton
    {
        if(!isset(self::$instances[$class])) {
            self::$instances[$class] = new $class();
        }

        return self::$instances[$class];
    }
}