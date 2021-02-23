<?php


namespace App\Behavioral\Command\Simple;


use App\Behavioral\Command\Simple\Contracts\Command;
use App\Behavioral\Command\Simple\Contracts\Receiver;

class ComplexCommand implements Command
{
    private Receiver $receiver;
    private string $text;

    public function __construct(Receiver $receiver, string $text)
    {
        $this->receiver = $receiver;
        $this->text = $text;
    }

    public function execute(): bool
    {
        //print_r($this->receiver->doSomething($this->text) . PHP_EOL);
        return true;
    }
}