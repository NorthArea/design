<?php declare(strict_types=1);

namespace Test;

use App\AbstractFactory\Simple\Contracts\AbstractFactory;
use App\AbstractFactory\Simple\Contracts\AbstractProductA;
use App\AbstractFactory\Simple\Contracts\AbstractProductB;
use App\AbstractFactory\Simple\FactoryOne\FactoryOne;
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