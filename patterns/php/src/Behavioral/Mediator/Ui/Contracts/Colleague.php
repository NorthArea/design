<?php


namespace App\Behavioral\Mediator\Ui\Contracts;


abstract class Colleague
{
    /**
     * @var Mediator
     */
    protected Mediator $mediator;

    public function setMediator(Mediator $mediator): void
    {
        $this->mediator = $mediator;
    }
}