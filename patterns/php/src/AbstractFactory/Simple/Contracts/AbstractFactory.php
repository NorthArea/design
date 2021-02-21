<?php


namespace App\AbstractFactory\Simple\Contracts;


interface AbstractFactory
{
    public function createProductA(): AbstractProductA;
    public function createProductB(): AbstractProductB;
}