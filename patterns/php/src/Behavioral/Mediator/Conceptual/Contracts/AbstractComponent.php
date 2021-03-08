<?php


namespace App\Behavioral\Mediator\Conceptual\Contracts;


abstract class AbstractComponent implements Component
{
    protected ?Mediator $mediator;

    public function __construct(Mediator $mediator = null)
    {
        $this->mediator = $mediator;
    }

    public function setMediator(Mediator $mediator): void
    {
        $this->mediator = $mediator;
    }
}