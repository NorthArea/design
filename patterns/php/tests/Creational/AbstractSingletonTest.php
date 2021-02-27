<?php declare(strict_types=1);

namespace Test\Creational;

use App\Behavioral\Command\Simple\Invoker;
use PHPUnit\Framework\TestCase;

class AbstractSingletonTest extends TestCase
{
    public function testInvoker(): void
    {
        self::assertTrue(Invoker::getInstance() === Invoker::getInstance());
    }

}
