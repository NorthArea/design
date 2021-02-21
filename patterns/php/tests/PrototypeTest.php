<?php


namespace Test;


use App\Prototype\CloneableObj;
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

}