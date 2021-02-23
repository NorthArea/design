<?php declare(strict_types=1);

namespace App\Creational\FactoryMethod\FactoryOne;

use App\Creational\FactoryMethod\AbstractFactoryMethod;
use App\Creational\FactoryMethod\Contracts\Product;

class FactoryOne extends AbstractFactoryMethod
{
    protected function getProduct(): Product
    {
        return new ProductOne();
    }
}