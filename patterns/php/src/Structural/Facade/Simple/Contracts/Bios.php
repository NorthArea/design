<?php


namespace App\Structural\Facade\Simple\Contracts;


interface Bios
{
    public function execute(): void;
    public function waitForKeyPress(): void;
    public function launch(OperatingSystem $operatingSystem): void;
    public function powerDown(): void;
}