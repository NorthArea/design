<?php


namespace Test\Creational;


use App\Creational\Combination\ProductA;
use App\Creational\Combination\SingletonBuilder;
use PHPUnit\Framework\TestCase;

class CombinationTest extends TestCase
{
    public function testMain(): void
    {
        self::assertTrue(SingletonBuilder::getInstance() === SingletonBuilder::getInstance());
        $factory = SingletonBuilder::getInstance();
        $factory->setProductA();
        $factory->setProductB();

        $factory = $factory->getResult();
        self::assertTrue($factory->getProductA() == $factory->getProductA());
        self::assertFalse($factory->getProductA() === $factory->getProductA());
    }
}