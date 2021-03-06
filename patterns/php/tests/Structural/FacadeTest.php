<?php


namespace Test\Structural;


use App\Structural\Facade\Simple\ComputerFacade;
use App\Structural\Facade\Simple\Contracts\Bios;
use App\Structural\Facade\Simple\Contracts\OperatingSystem;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    public function testSimple(): void
    {
        $os = $this->createMock(OperatingSystem::class);
        $os->method('getName')->willReturn('Linux');

        $bios = $this->createMock(Bios::class);
        $bios->method('launch')->with($os);

        $computer = new ComputerFacade($bios, $os);
        $computer->turnOn();
        self::assertEquals('Linux', $computer->getInformation());
    }

}