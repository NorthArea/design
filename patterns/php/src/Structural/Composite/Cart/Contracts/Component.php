<?php


namespace App\Structural\Composite\Cart\Contracts;


abstract class Component
{
    private int $price;

    public function __construct(int $price)
    {
        $this->price = $price;
    }

    protected function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @var Component
     */
    private Component $parent;

    protected function setParent(Component $component): void
    {
        $this->parent = $component;
    }

    protected function getParent(): Component
    {
        return $this->parent;
    }

    public function calculate(): int
    {
        return $this->getPrice();
    }
}