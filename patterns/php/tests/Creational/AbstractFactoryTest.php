<?php declare(strict_types=1);

namespace Test\Creational;

use App\Creational\AbstractFactory\Simple\Contracts\AbstractFactory;
use App\Creational\AbstractFactory\Simple\Contracts\AbstractProductA;
use App\Creational\AbstractFactory\Simple\Contracts\AbstractProductB;
use App\Creational\AbstractFactory\Simple\FactoryOne\FactoryOne;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testFactory(): void
    {
        $factory = new FactoryOne();
        self::assertInstanceOf(AbstractFactory::class, $factory);
        self::assertInstanceOf(AbstractProductA::class, $factory->createProductA());
        self::assertInstanceOf(AbstractProductB::class, $factory->createProductB());
    }

}