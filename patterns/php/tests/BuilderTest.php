<?php declare(strict_types=1);

namespace Test;

use App\Builder\BuilderOne\BuilderOne;
use App\Builder\BuilderOne\ProductOne;
use App\Builder\BuilderTwo\BuilderTwo;
use App\Builder\BuilderTwo\ProductTwo;
use App\Builder\Director;
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