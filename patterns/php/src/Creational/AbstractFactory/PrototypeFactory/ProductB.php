<?php declare(strict_types=1);

namespace App\Creational\AbstractFactory\PrototypeFactory;

use App\Creational\AbstractFactory\Contracts\AbstractProductB;

class ProductB implements AbstractProductB
{

    public function doSomething(): string
    {
        return "doSomething";
    }
}