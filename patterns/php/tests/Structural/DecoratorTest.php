<?php


namespace Test\Structural;


use App\Structural\Decorator\AnotherDecorator;
use App\Structural\Decorator\ConcreteComponent;
use App\Structural\Decorator\SimpleDecorator;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    public function testMain(): void
    {
        $component = new ConcreteComponent();
        $component = new SimpleDecorator($component);
        $component = new AnotherDecorator($component);

        self::assertEquals("ConcreteComponent with SimpleDecorator with AnotherDecorator", $component->execute());
    }

}