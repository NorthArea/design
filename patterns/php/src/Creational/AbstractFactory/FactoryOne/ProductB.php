<?php declare(strict_types=1);

namespace App\Creational\AbstractFactory\FactoryOne;

use App\Creational\AbstractFactory\Contracts\AbstractProductB;

class ProductB implements AbstractProductB
{

    public function doSomething(): string
    {
        return "doSomething";
    }
}