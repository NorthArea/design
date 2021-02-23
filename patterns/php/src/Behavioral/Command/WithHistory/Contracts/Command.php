<?php


namespace App\Behavioral\Command\WithHistory\Contracts;


interface Command
{
    public function execute(): void;
    public function undo(): void;
}