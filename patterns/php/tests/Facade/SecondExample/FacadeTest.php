<?php

namespace Test\Facade\SecondExample;

use App\Facade\SecondExample\BiosInterface;
use App\Facade\SecondExample\Facade;
use App\Facade\SecondExample\OperatingSystemInterface;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    public function testComputerOn(): void
    {
        $os = $this->createMock(OperatingSystemInterface::class);
        $os->method('getName')->willReturn('Linux');
        $bios = $this->createMock(BiosInterface::class);
        $bios->method('launch')
            ->with($os);

        $facade = new Facade($bios, $os);
        $facade->turnOn();

        self::assertSame('Linux', $os->getName());
    }

}
