<?php


namespace App\Creational\AbstractFactory\SingletonFactory;


use App\Creational\AbstractFactory\Contracts\AbstractFactory;
use App\Creational\AbstractFactory\Contracts\AbstractProductA;
use App\Creational\AbstractFactory\Contracts\AbstractProductB;
use App\Creational\AbstractSingleton;

class SingletonFactory extends AbstractSingleton implements AbstractFactory
{

    public function createProductA(): AbstractProductA
    {
        return new ProductA();
    }

    public function createProductB(): AbstractProductB
    {
        return new ProductB();
    }
}