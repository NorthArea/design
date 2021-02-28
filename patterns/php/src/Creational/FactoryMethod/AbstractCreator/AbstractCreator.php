<?php


namespace App\Creational\FactoryMethod\AbstractCreator;


use App\Creational\FactoryMethod\Contracts\IProductA;
use App\Creational\FactoryMethod\Contracts\IProductB;

abstract class AbstractCreator
{
    abstract public function createProductA(): IProductA;
    abstract public function createProductB(): IProductB;
}