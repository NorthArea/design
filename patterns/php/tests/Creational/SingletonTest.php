<?php declare(strict_types=1);

namespace Test\Creational;

use App\Creational\Singleton\Registry\Registry;
use App\Creational\Singleton\Registry\TestRegistry;
use App\Creational\Singleton\Singleton;
use App\Creational\Singleton\WithDelegation\Contracts\Service;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testMain(): void
    {
        self::assertTrue(Singleton::getInstance() === Singleton::getInstance());
    }

    public function testRegistry(): void
    {
        self::assertTrue(Registry::getInstance(TestRegistry::class) === Registry::getInstance(TestRegistry::class));
    }

    public function testSingletonWithDelegation(): void
    {
        self::assertInstanceOf(Service::class, \App\Creational\Singleton\WithDelegation\Singleton::getInstance());
    }


}
