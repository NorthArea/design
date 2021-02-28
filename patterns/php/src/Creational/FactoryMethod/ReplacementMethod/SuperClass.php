<?php


namespace App\Creational\FactoryMethod\ReplacementMethod;


use App\Creational\FactoryMethod\ProductA;
use App\Creational\FactoryMethod\Contracts\IProductA;

class SuperClass
{
    protected function getProduct(): IProductA
    {
        return new ProductA();
    }

    public function doSomethingUseFul(): string
    {
        return get_class($this->getProduct());
    }
}