<?php


namespace App\Behavioral\Command\WithHistory;


use App\Behavioral\Command\WithHistory\Contracts\Command;

class SimpleCommand implements Command
{
    private string $string;

    public function __construct(string $string)
    {
        $this->string = $string;
    }

    public function execute(): void
    {
        print_r("EXECUTE {$this->string}" . PHP_EOL);
    }

    public function undo(): void
    {
        print_r("UNDO {$this->string}" . PHP_EOL);
    }
}