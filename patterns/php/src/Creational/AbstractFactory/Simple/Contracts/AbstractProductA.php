<?php


namespace App\Creational\AbstractFactory\Simple\Contracts;


interface AbstractProductA
{
    public function doSomething(AbstractProductB $ProductB): int;
}