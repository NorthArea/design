<?php


namespace App\Behavioral\Mediator\Conceptual\Contracts;


interface Mediator
{
    public function notify(object $sender, string $event): void;
}