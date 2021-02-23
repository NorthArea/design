<?php


namespace App\Creational\FactoryMethod\FactoryTwo;


use App\Creational\FactoryMethod\Contracts\Product;

class ProductTwo implements Product
{
    public function getString(): string
    {
        return "ProductTwo";
    }
}