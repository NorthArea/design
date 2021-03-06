<?php


namespace App\Creational\Combination;


class ProductA implements Contracts\ProductA
{
    public static int $count = 0;
    public function getString(): string
    {
        return __CLASS__;
    }

    public function __clone()
    {
        self::$count++;
    }
}