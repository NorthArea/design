<?php


namespace Test;


use PHPUnit\Framework\TestCase;
use SplQueue;

class SplQueueTest extends TestCase
{
    public function testMain():void
    {
        $array1 = ['hello'=>'world'];
        $array2 = ['key'=>'val'];

        $queue = new SplQueue();
        self::assertTrue($queue->isEmpty());
        $queue->enqueue($array1);
        $queue->enqueue($array2);
        self::assertFalse($queue->isEmpty());
        self::assertEquals($array1, $queue->dequeue());
        self::assertFalse($queue->isEmpty());
    }

}