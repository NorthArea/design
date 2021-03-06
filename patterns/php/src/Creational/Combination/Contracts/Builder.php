<?php


namespace App\Creational\Combination\Contracts;


interface Builder
{
    public function setProductA(): void;
    public function setProductB(): void;
    public function reset(): void;
    public function getResult(): AbstractFactory;
}