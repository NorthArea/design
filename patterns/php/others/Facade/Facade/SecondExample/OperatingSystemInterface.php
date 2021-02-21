<?php


namespace App\Facade\SecondExample;


interface OperatingSystemInterface
{
    public function halt(): void;

    public function getName(): string;
}