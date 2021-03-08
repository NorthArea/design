<?php


namespace App\Behavioral\Mediator\Conceptual;


use App\Behavioral\Mediator\Conceptual\Contracts\AbstractComponent;

class ComponentOne extends AbstractComponent
{
    public int $test = 0;
    public function doA(): void
    {
        $this->mediator->notify($this, "A");
    }

    public function doB(): void
    {
        $this->test = 1;
        $this->mediator->notify($this, "B");
    }
}