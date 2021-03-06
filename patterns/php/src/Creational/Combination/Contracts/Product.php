<?php


namespace App\Creational\Combination\Contracts;


interface Product
{
    public function getString(): string;
    public function __clone();
}