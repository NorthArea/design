<?php declare(strict_types=1);

namespace Test\Creational;

use App\Creational\Builder\BuilderOne\BuilderOne;
use App\Creational\Builder\BuilderOne\ProductOne;
use App\Creational\Builder\BuilderTwo\BuilderTwo;
use App\Creational\Builder\BuilderTwo\ProductTwo;
use App\Creational\Builder\Director;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    public function testDirector(): void
    {
        $director = new Director(new BuilderOne());
        self::assertInstanceOf(ProductOne::class, $director->make());
        $director->setBuilder(new BuilderTwo());
        self::assertInstanceOf(ProductTwo::class, $director->make());
    }

    public function testBuilder(): void
    {
        $builder = new BuilderOne();
        self::assertInstanceOf(ProductOne::class, $builder->setPartA()->setPartC()->get());
    }


}