<?php


namespace App\Behavioral\Command\WithTransactions\Contracts;


interface Command
{
    public function execute(): void;
    public function undo(): void;
}