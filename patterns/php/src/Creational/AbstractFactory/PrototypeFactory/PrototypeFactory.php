<?php


namespace App\Creational\AbstractFactory\PrototypeFactory;


use App\Creational\AbstractFactory\Contracts\AbstractProductA;
use App\Creational\AbstractFactory\Contracts\AbstractProductB;
use App\Creational\AbstractFactory\Contracts\AbstractPrototypeFactory;
use App\Creational\AbstractSingleton;

class PrototypeFactory extends AbstractSingleton implements AbstractPrototypeFactory
{
    /**
     * @var ProductA
     */
    private ProductA $productA;
    /**
     * @var ProductB
     */
    private ProductB $productB;

    protected function __construct()
    {
        $this->productA = new ProductA();
        $this->productB = new ProductB();
    }

    public function getProductA(): AbstractProductA
    {
        return clone $this->productA;
    }

    public function getProductB(): AbstractProductB
    {
        return clone $this->productB;
    }
}