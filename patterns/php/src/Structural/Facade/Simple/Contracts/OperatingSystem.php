<?php


namespace App\Structural\Facade\Simple\Contracts;


interface OperatingSystem
{
    public function halt(): void;
    public function getName(): string;
}