<?php


namespace App\Behavioral\Command\Simple\Contracts;


interface Command
{
    public function execute(): bool;
}