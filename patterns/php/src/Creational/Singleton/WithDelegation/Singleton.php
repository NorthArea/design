<?php


namespace App\Creational\Singleton\WithDelegation;


use App\Creational\Singleton\WithDelegation\Contracts\Service;

class Singleton implements Service
{
    private static Singleton $instance;

    private Service $service;

    private function __construct(){
        $this->service = new ConcreteService();
    }

    public static function getInstance(): Singleton
    {
        if(!isset(self::$instance)){
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function doSomething(): string
    {
        return $this->service->doSomething();
    }

    private function __clone(){}
    private function __wakeup(){}
}