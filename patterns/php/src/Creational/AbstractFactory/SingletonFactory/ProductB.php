<?php


namespace App\Creational\AbstractFactory\SingletonFactory;


use App\Creational\AbstractFactory\Contracts\AbstractProductB;

class ProductB implements AbstractProductB
{

    public function doSomething(): string
    {
        return "doSomething";
    }
}