<?php


namespace App\Behavioral\Mediator\Conceptual;


use App\Behavioral\Mediator\Conceptual\Contracts\Component;
use App\Behavioral\Mediator\Conceptual\Contracts\Mediator;
use App\Creational\AbstractSingleton;

class ConcreteMediator extends AbstractSingleton implements Mediator
{
    private array $components;

    public function addComponent(Component $component): self
    {
        $component->setMediator($this);
        $this->components[] = $component;
        return $this;
    }

    public function notify(object $sender, string $event): void
    {
        if ($event === "A") {
            $this->components[1]->doC();
            $this->components[1]->doD();
        }

        if ($event === "D") {
            $this->components[0]->doB();
            //$this->components[0]->doA();
        }
    }
}