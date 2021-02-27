<?php declare(strict_types=1);

namespace App\Creational\AbstractFactory\FactoryOne;

use App\Creational\AbstractFactory\Contracts\AbstractFactory;


class SimpleFactory implements AbstractFactory
{

    public function createProductA(): ProductA
    {
        return new ProductA();
    }

    public function createProductB(): ProductB
    {
        return new ProductB();
    }
}