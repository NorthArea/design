<?php


namespace App\Creational\FactoryMethod\AbstractCreator;


use App\Creational\FactoryMethod\Contracts\IProductA;
use App\Creational\FactoryMethod\Contracts\IProductB;
use App\Creational\FactoryMethod\ProductA;
use App\Creational\FactoryMethod\ProductB;

class ConcreteCreator extends AbstractCreator
{
    public function createProductA(): IProductA
    {
        return new ProductA();
    }

    public function createProductB(): IProductB
    {
        return new ProductB();
    }
}