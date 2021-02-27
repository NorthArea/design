<?php


namespace App\Creational\AbstractFactory\Contracts;


interface AbstractPrototypeFactory
{
    public function getProductA(): AbstractProductA;
    public function getProductB(): AbstractProductB;
}