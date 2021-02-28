<?php


namespace App\Creational\FactoryMethod;


use App\Creational\FactoryMethod\Contracts\IProductB;

class ProductB implements IProductB
{

    public function doSomething(): string
    {
        return __CLASS__;
    }
}