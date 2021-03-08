<?php


namespace App\Behavioral\Mediator\Conceptual\Contracts;


interface Component
{
    public function __construct(Mediator $mediator);
    public function setMediator(Mediator $mediator): void;
}