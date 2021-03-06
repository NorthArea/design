<?php


namespace Test\Structural;


use App\Structural\Bridge\ConcreteAdaptableBridge;
use App\Structural\Bridge\ConcreteSimpleBridge;
use App\Structural\Bridge\Imps\ImpOne;
use App\Structural\Bridge\Imps\ImpTwo;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
    public function testSimple(): void
    {
        $bridge = new ConcreteSimpleBridge(new ImpOne());
        self::assertEquals(
            ImpOne::class . "-enable" . "|" . ImpOne::class . "-disable",
            $bridge->doSomething()
        );

        $bridge->setImplementor(new ImpTwo());
        self::assertEquals(
            ImpTwo::class . "-enable" . "|" . ImpTwo::class . "-disable",
            $bridge->doSomething()
        );
    }

    public function testAdaptable(): void
    {
        $bridge = new ConcreteAdaptableBridge([0,1]);

        self::assertEquals(
            ImpOne::class . "-enable" . "|" . ImpOne::class . "-disable",
            $bridge->doSomethingAnother()
        );

        $bridge = new ConcreteAdaptableBridge([0,1,2,3,4]);
        self::assertEquals(
            ImpTwo::class . "-enable" . "|" . ImpTwo::class . "-disable",
            $bridge->doSomethingAnother()
        );
    }


}