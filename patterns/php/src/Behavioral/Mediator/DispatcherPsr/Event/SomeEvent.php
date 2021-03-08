<?php


namespace App\Behavioral\Mediator\DispatcherPsr\Event;


use App\Behavioral\Mediator\DispatcherPsr\Constract\AbstractEvent;
use App\Creational\Combination\ProductA;

class SomeEvent extends AbstractEvent
{
    private string $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function getText(): string
    {
        return $this->text;
    }
}