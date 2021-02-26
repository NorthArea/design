<?php


namespace Test;


use App\Others\Delegation\ConcreteDelegate;
use App\Others\Delegation\Receiver;
use PHPUnit\Framework\TestCase;

class DelegationTest extends TestCase
{
    public function testMain(): void
    {
        $delegate = new ConcreteDelegate();
        $receiver = new Receiver($delegate);
        self::assertTrue($receiver->getClass() === ConcreteDelegate::class . "|" . Receiver::class);
    }

}