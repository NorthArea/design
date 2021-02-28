<?php


namespace App\Creational\FactoryMethod\ReplacementMethod;


use App\Creational\FactoryMethod\Contracts\IProductA;
use App\Creational\FactoryMethod\MyProduct;

class ReplacementClass extends SuperClass
{
    protected function getProduct(): IProductA
    {
        return new MyProduct();
    }

}