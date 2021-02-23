<?php


namespace App\Creational\Singleton\WithDelegation;


use App\Creational\Singleton\WithDelegation\Contracts\Service;

class ConcreteService implements Service
{

    public function doSomething(): string
    {
        return __METHOD__;
    }
}