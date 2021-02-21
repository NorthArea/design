<?php declare(strict_types=1);

namespace App\AbstractFactory\Simple\FactoryOne;

use App\AbstractFactory\Simple\Contracts\AbstractProductA;
use App\AbstractFactory\Simple\Contracts\AbstractProductB;

class FactoryOneProductA implements AbstractProductA
{

    public function doSomething(AbstractProductB $ProductB): int
    {
        // TODO: Implement doSomething() method.
    }
}