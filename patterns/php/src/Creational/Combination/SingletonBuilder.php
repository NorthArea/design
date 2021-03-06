<?php


namespace App\Creational\Combination;


use App\Creational\AbstractSingleton;
use App\Creational\Combination\Contracts\AbstractFactory;
use App\Creational\Combination\Contracts\Builder;

class SingletonBuilder extends AbstractSingleton implements Builder
{
    /**
     * @var Factory
     */
    private Factory $factory;

    protected function __construct()
    {
        $this->reset();
    }

    public function setProductA(): void
    {
        $this->factory->setProductA(new ProductA());
    }

    public function setProductB(): void
    {
        $this->factory->setProductB(new ProductB());
    }

    public function reset(): void
    {
        $this->factory = new Factory();
    }

    public function getResult(): AbstractFactory
    {
        $result = $this->factory;
        $this->reset();
        return $result;
    }
}