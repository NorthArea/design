<?php declare(strict_types=1);

namespace App\FactoryMethod;

use App\FactoryMethod\Constracts\ProductA;
use App\FactoryMethod\Constracts\ProductB;

abstract class AbstractFactoryMethod
{
    abstract public function getProductA(): ProductA;
    abstract public function getProductB(): ProductB;

    public function doSomething(): string
    {
        return $this->getProductA()->getString() . ": " . $this->getProductB()->getInt();
    }
}