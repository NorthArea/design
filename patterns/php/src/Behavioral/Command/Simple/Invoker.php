<?php


namespace App\Behavioral\Command\Simple;


use App\Behavioral\Command\Simple\Contracts\Command;
use App\Creational\AbstractSingleton;
use SplQueue;

class Invoker extends AbstractSingleton
{
    private SplQueue $commands;

    protected function __construct()
    {
        $this->commands = new SplQueue();
    }

    public function setCommand(Command $command): void
    {
        $this->commands->push($command);
    }

    public function executeCommand(): void
    {
        while (!$this->commands->isEmpty()){
            $this->commands->pop()->execute();
        }
    }
}