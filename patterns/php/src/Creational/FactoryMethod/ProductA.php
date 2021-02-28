<?php


namespace App\Creational\FactoryMethod;


use App\Creational\FactoryMethod\Contracts\IProductA;

class ProductA implements IProductA
{

    public function doSomething(): string
    {
        return __CLASS__;
    }
}