<?php


namespace App\Creational\AbstractFactory\SingletonFactory;


use App\Creational\AbstractFactory\Contracts\AbstractProductA;
use App\Creational\AbstractFactory\Contracts\AbstractProductB;

class ProductA implements AbstractProductA
{

    public function doSomething(AbstractProductB $ProductB): int
    {
        return "doSomething";
    }
}