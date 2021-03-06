<?php


namespace App\Structural\Composite\Cart\Contracts;


abstract class CompositeComponent extends Component
{
    /**
     * @var array Component
     */
    private array $components;

    public function add(Component $component): self
    {
        $component->setParent($this);
        $this->components[] = $component;
        return $this;
    }

    public function calculate(): int
    {
        $count = $this->getPrice();
        foreach ($this->components as $component) {
            $count += $component->calculate();
        }
        return $count;
    }
}