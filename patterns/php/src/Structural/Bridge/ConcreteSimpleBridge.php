<?php


namespace App\Structural\Bridge;


class ConcreteSimpleBridge extends SimpleBridge
{
    public function doSomething(): string
    {
        return $this->imp->enable() . "-enable" . "|" . $this->imp->disable() . "-disable";
    }
}