<?php


namespace Test;


use PHPUnit\Framework\TestCase;
use SplDoublyLinkedList;
use SplStack;

class SplStackTest extends TestCase
{
    public function testMain()
    {
        $array1 = ['hello'=>'world'];
        $array2 = ['key'=>'val'];

        $stack = new SplStack();
        self::assertTrue($stack->isEmpty());
        $stack->push($array1);
        $stack->push($array2);
        self::assertFalse($stack->isEmpty());
        self::assertEquals($array2, $stack->pop());
        self::assertFalse($stack->isEmpty());
    }

}