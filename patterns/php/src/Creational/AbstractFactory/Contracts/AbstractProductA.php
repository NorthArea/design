<?php


namespace App\Creational\AbstractFactory\Contracts;


interface AbstractProductA
{
    public function doSomething(AbstractProductB $ProductB): int;
}