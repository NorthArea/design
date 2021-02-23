<?php


namespace App\Behavioral\Command\Simple;


use App\Behavioral\Command\Simple\Contracts\Command;

class SimpleCommand implements Command
{

    public function execute(): bool
    {
        //print_r("Do something useful" . PHP_EOL);
        return true;
    }
}