<?php declare(strict_types=1);

namespace Test\Creational;

use App\Creational\AbstractFactory\Contracts\AbstractFactory;
use App\Creational\AbstractFactory\Contracts\AbstractProductA;
use App\Creational\AbstractFactory\Contracts\AbstractProductB;
use App\Creational\AbstractFactory\FactoryOne\SimpleFactory;
use App\Creational\AbstractFactory\PrototypeFactory\PrototypeFactory;
use App\Creational\AbstractFactory\SingletonFactory\SingletonFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testFactory(): void
    {
        $factory = new SimpleFactory();
        self::assertInstanceOf(AbstractFactory::class, $factory);
        self::assertInstanceOf(AbstractProductA::class, $factory->createProductA());
        self::assertInstanceOf(AbstractProductB::class, $factory->createProductB());
    }

    public function testSingleton(): void
    {
        $factory = SingletonFactory::getInstance();
        self::assertInstanceOf(AbstractFactory::class, $factory);
        self::assertInstanceOf(AbstractProductA::class, $factory->createProductA());
        self::assertInstanceOf(AbstractProductB::class, $factory->createProductB());
    }

    public function testPrototype():void
    {
        $factory = PrototypeFactory::getInstance();
        self::assertTrue($factory->getProductA()->getcount() !== $factory->getProductA()->getcount());
    }


}