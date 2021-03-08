<?php


namespace App\Behavioral\Mediator\Conceptual;


use App\Behavioral\Mediator\Conceptual\Contracts\AbstractComponent;

class ComponentTwo extends AbstractComponent
{
    public function doC(): void
    {
        $this->mediator->notify($this, "C");
    }

    public function doD(): void
    {
        $this->mediator->notify($this, "D");
    }
}