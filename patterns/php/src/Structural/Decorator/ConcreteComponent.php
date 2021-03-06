<?php


namespace App\Structural\Decorator;


use App\Structural\Decorator\Contracts\Component;

class ConcreteComponent implements Component
{

    public function execute(): string
    {
        return "ConcreteComponent";
    }

    public function calculate(): int
    {
        return 42;
    }
}