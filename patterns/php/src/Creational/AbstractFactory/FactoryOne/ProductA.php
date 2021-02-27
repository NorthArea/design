<?php declare(strict_types=1);

namespace App\Creational\AbstractFactory\FactoryOne;

use App\Creational\AbstractFactory\Contracts\AbstractProductA;
use App\Creational\AbstractFactory\Contracts\AbstractProductB;

class ProductA implements AbstractProductA
{

    public function doSomething(AbstractProductB $ProductB): int
    {
        return 42;
    }
}