<?php


namespace App\Structural\Facade\Simple;


use App\Structural\Facade\Simple\Contracts\Bios;
use App\Structural\Facade\Simple\Contracts\OperatingSystem;

class ComputerFacade
{
    /**
     * @var OperatingSystem
     */
    private OperatingSystem $operationSystem;
    /**
     * @var Bios
     */
    private Bios $bios;

    public function __construct(Bios $bios, OperatingSystem $operatingSystem)
    {
        $this->bios = $bios;
        $this->operationSystem = $operatingSystem;
    }

    public function turnOn(): void
    {
        $this->bios->execute();
        $this->bios->waitForKeyPress();
        $this->bios->launch($this->operationSystem);
    }

    public function turnOff(): void
    {
        $this->operationSystem->halt();
        $this->bios->powerDown();
    }

    public function getInformation(): string
    {
        return $this->operationSystem->getName();
    }
}