<?php declare(strict_types=1);

namespace Test\Creational;

use App\Creational\FactoryMethod\FactoryOne\FactoryOne;
use App\Creational\FactoryMethod\FactoryTwo\FactoryTwo;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testFactoryB(): void
    {
        $factory = new FactoryOne();
        self::assertEquals("ProductOne!", $factory->doSomething());

        $factory = new FactoryTwo();
        self::assertEquals("ProductTwo!", $factory->doSomething());
    }
}