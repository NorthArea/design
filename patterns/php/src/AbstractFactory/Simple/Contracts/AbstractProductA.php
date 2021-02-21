<?php


namespace App\AbstractFactory\Simple\Contracts;


interface AbstractProductA
{
    public function doSomething(AbstractProductB $ProductB): int;
}