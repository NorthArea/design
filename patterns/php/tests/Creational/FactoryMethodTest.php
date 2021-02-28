<?php declare(strict_types=1);

namespace Test\Creational;

use App\Creational\FactoryMethod\AbstractCreator\ConcreteCreator;
use App\Creational\FactoryMethod\MyProduct;
use App\Creational\FactoryMethod\ParamsMethod\CreatorWithParams;
use App\Creational\FactoryMethod\ProductA;
use App\Creational\FactoryMethod\ProductB;
use App\Creational\FactoryMethod\ReplacementMethod\ReplacementClass;
use App\Creational\FactoryMethod\ReplacementMethod\SuperClass;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testAbstract(): void
    {
        $factory = new ConcreteCreator();
        self::assertInstanceOf(ProductA::class, $factory->createProductA());
        self::assertInstanceOf(ProductB::class, $factory->createProductB());
    }

    public function testReplacement(): void
    {
        $factory = new SuperClass();
        self::assertSame($factory->doSomethingUseFul(), ProductA::class);
        $subFactory = new ReplacementClass();
        self::assertSame($subFactory->doSomethingUseFul(), MyProduct::class);
    }

    public function testWithParams(): void
    {
        $factory = CreatorWithParams::getInstance();
        self::assertInstanceOf(ProductA::class, $factory->createProduct(CreatorWithParams::IPRODUCTA));
        self::assertInstanceOf(MyProduct::class, $factory->createProduct(CreatorWithParams::IPRODUCT));
    }


}