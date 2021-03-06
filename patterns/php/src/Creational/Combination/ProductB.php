<?php


namespace App\Creational\Combination;


class ProductB implements Contracts\ProductB
{
    private static int $count = 0;
    public function getString(): string
    {
        return __CLASS__;
    }

    public function __clone()
    {
        self::$count++;
    }
}