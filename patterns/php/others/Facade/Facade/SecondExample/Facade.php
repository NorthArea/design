<?php


namespace App\Facade\SecondExample;

/**
 * Class Facade
 * @package Src\Facade\SecondExample
 */
class Facade
{
    /**
     * @var BiosInterface
     */
    private $bios;
    /**
     * @var OperatingSystemInterface
     */
    private $system;

    public function __construct(BiosInterface $bios, OperatingSystemInterface $system)
    {
        $this->bios = $bios;
        $this->system = $system;
    }

    public function turnOn(): void
    {
        $this->bios->execute();
        $this->bios->waitForKeyPress();
        $this->bios->launch($this->system);
    }

    public function turnOff(): void
    {
        $this->system->halt();
        $this->bios->powerDown();
    }
}