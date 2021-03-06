<?php


namespace App\Structural\Decorator;


use App\Structural\Decorator\Contracts\Decorator;

class SimpleDecorator extends Decorator
{
    public function execute(): string
    {
        return parent::execute() . " with SimpleDecorator";
    }

}