<?php


namespace App\Creational\Combination;


use App\Creational\Combination\Contracts\AbstractFactory;
use App\Creational\Combination\Contracts\ProductA;
use App\Creational\Combination\Contracts\ProductB;

class Factory implements AbstractFactory
{
    /**
     * @var ProductA
     */
    private ProductA $productA;
    /**
     * @var ProductB
     */
    private ProductB $productB;

    public function getProductA(): ProductA
    {
        return clone $this->productA;
    }

    public function getProductB(): ProductB
    {
        return clone $this->productB;
    }

    public function setProductA(ProductA $productA): void
    {
        $this->productA = $productA;
    }

    public function setProductB(ProductB $productB): void
    {
        $this->productB = $productB;
    }
}