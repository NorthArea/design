<?php


namespace App\Structural\Decorator\Contracts;


interface Component
{
    public function execute(): string;
    public function calculate(): int;
}