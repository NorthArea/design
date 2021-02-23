<?php


namespace Test\Creational;


use App\Creational\Prototype\CloneableObj;
use App\Creational\Prototype\CloneFactory;
use PHPUnit\Framework\TestCase;
use stdClass;

class PrototypeTest extends TestCase
{
    public function testMain(): void
    {
        $original = new CloneableObj(15, new StdClass);
        $clone = clone $original;
        self::assertTrue($clone->count === 1);
        self::assertTrue($clone->fieldInt === $original->fieldInt);
        self::assertTrue($clone->fieldStd !== $original->fieldStd);
    }

    public function testFactory(): void
    {
        $original = new CloneableObj(15, new StdClass);
        $factory = new CloneFactory();

        $factory->put(CloneableObj::class, $original);

        $clone = $factory->get(CloneableObj::class);
        self::assertTrue($clone->count === 1);
        self::assertTrue($clone->fieldInt === $original->fieldInt);
        self::assertTrue($clone->fieldStd !== $original->fieldStd);
    }


}