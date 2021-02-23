<?php


namespace App\Creational\AbstractFactory\Simple\Contracts;


interface AbstractFactory
{
    public function createProductA(): AbstractProductA;
    public function createProductB(): AbstractProductB;
}