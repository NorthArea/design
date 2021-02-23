<?php declare(strict_types=1);

namespace App\Creational\FactoryMethod;

use App\Creational\FactoryMethod\Contracts\Product;

abstract class AbstractFactoryMethod
{
    abstract protected function getProduct(): Product;

    public function doSomething(): string
    {
        return $this->getProduct()->getString() . "!";
    }
}