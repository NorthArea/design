<?php declare(strict_types=1);

namespace App\Creational\AbstractFactory\Simple\FactoryOne;

use App\Creational\AbstractFactory\Simple\Contracts\AbstractProductA;
use App\Creational\AbstractFactory\Simple\Contracts\AbstractProductB;

class FactoryOneProductA implements AbstractProductA
{

    public function doSomething(AbstractProductB $ProductB): int
    {
        // TODO: Implement doSomething() method.
    }
}