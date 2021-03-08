<?php


namespace App\Behavioral\Mediator\Ui\Contracts;


interface Mediator
{
    public function getUser(string $userName): string;
}