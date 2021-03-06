<?php


namespace App\Structural\Composite\Cart;


use App\Structural\Composite\Cart\Contracts\CompositeComponent;

class Cart extends CompositeComponent
{
    private static Cart $instance;

    private function __construct()
    {
        parent::__construct(0);
    }

    public static function getInstance(): Cart
    {
        if(!isset(self::$instance)){
            self::$instance = new Cart();
        }

        return self::$instance;
    }

    public static function getSum(): int
    {
        return self::$instance->calculate();
    }
}