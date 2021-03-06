<?php


namespace App\Structural\Decorator\Contracts;


abstract class Decorator implements Component
{
    /**
     * @var Component
     */
    private Component $component;

    public function __construct(Component $component)
    {
        $this->component = $component;
    }

    protected function getComponent(): Component
    {
        return $this->component;
    }

    public function execute(): string
    {
        return $this->component->execute();
    }

    public function calculate(): int
    {
        return $this->component->calculate();
    }
}