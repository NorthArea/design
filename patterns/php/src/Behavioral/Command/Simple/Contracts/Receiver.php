<?php


namespace App\Behavioral\Command\Simple\Contracts;


interface Receiver
{
    public function doSomething(string $information): string;
}