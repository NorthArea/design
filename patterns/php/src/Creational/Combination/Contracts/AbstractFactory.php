<?php


namespace App\Creational\Combination\Contracts;


interface AbstractFactory
{
    public function getProductA(): ProductA;
    public function getProductB(): ProductB;
}