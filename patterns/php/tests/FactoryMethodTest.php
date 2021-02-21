<?php declare(strict_types=1);

namespace Test;

use App\FactoryMethod\Constracts\ProductA;
use App\FactoryMethod\Constracts\ProductB;
use App\FactoryMethod\FactoryOne\FactoryOne;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testFactoryA():void
    {
        $factory = new FactoryOne();
        $product = $factory->getProductA();
        self::assertInstanceOf(ProductA::class, $product);

        $product = $factory->getProductB();
        self::assertInstanceOf(ProductB::class, $product);

    }

    public function testFactoryB(): void
    {
        $factory = new FactoryOne();
        self::assertIsString($factory->doSomething());
    }


}