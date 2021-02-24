<?php


namespace App\Behavioral\Command\Simple;


use App\Behavioral\Command\Simple\Contracts\Receiver;

class HelloReceiver implements Receiver
{
    public string $text;

    public function action(string $information): string
    {
        $this->text = $information;
        return "Hello {$information}!";
    }
}