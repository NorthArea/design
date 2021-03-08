<?php


namespace Test\Behavioral;


use App\Behavioral\Observer\Proxy\UserProxy;
use App\Behavioral\Observer\Proxy\UserProxyObserver;
use App\Behavioral\Observer\Reciprocal\One;
use App\Behavioral\Observer\Reciprocal\Two;
use App\Behavioral\Observer\Spl\User;
use App\Behavioral\Observer\Spl\UserObserver;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
    public function testSpl(): void
    {
        $email = 'spl@php.com';
        $name = 'John';

        $observer = new UserObserver();
        $user = new User('test@test.com', $name);
        $user->attach($observer);

        self::assertEquals('', $observer->email);
        $user->setEmail($email);
        self::assertEquals($email, $observer->email);
    }


    public function testProxy(): void
    {
        $email = 'spl@php.com';
        $name = 'John';

        $user = new UserProxy(new \App\Behavioral\Observer\Proxy\User());
        $observer = new UserProxyObserver();
        $user->attach($observer);

        $user->setName($name);
        $user->setEmail($email);

        self::assertEquals($email, $observer->email);
        self::assertEquals($name, $observer->name);
    }

    public function testReciprocal(): void
    {
        $one = new One("One");
        $two = new Two("Two");

        $one->attach($two);
        $two->attach($one);

        $one->setSomeField("Hello");
        $two->setSomeField("World");
        exit();
    }


}