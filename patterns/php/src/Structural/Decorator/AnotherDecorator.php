<?php


namespace App\Structural\Decorator;


use App\Structural\Decorator\Contracts\Component;
use App\Structural\Decorator\Contracts\Decorator;

class AnotherDecorator extends Decorator
{
    public function execute(): string
    {
        return parent::execute() . " with AnotherDecorator";
    }
}