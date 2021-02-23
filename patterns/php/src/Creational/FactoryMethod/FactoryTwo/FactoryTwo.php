<?php


namespace App\Creational\FactoryMethod\FactoryTwo;


use App\Creational\FactoryMethod\AbstractFactoryMethod;
use App\Creational\FactoryMethod\Contracts\Product;

class FactoryTwo extends AbstractFactoryMethod
{

    protected function getProduct(): Product
    {
        return new ProductTwo();
    }
}