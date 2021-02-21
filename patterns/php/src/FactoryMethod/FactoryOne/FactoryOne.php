<?php declare(strict_types=1);

namespace App\FactoryMethod\FactoryOne;

use App\FactoryMethod\AbstractFactoryMethod;
use App\FactoryMethod\Constracts\ProductA;
use App\FactoryMethod\Constracts\ProductB;

class FactoryOne extends AbstractFactoryMethod
{

    public function getProductA(): ProductA
    {
        return new ProductOneA();
    }

    public function getProductB(): ProductB
    {
        return new ProductOneB();
    }
}