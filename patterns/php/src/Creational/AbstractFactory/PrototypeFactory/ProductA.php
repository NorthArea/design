<?php declare(strict_types=1);

namespace App\Creational\AbstractFactory\PrototypeFactory;

use App\Creational\AbstractFactory\Contracts\AbstractProductA;
use App\Creational\AbstractFactory\Contracts\AbstractProductB;

class ProductA implements AbstractProductA
{
    private static int $count = 0;

    public function doSomething(AbstractProductB $ProductB): int
    {
        return 42;
    }

    public function __clone()
    {
        self::$count++;
    }

    public function getcount(): int
    {
        return self::$count;
    }
}