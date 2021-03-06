<?php


namespace App\Structural\Bridge;


class ConcreteAdaptableBridge extends AdaptableBridge
{
    public function doSomethingAnother(): string
    {
        return $this->imp->enable() . "-enable" . "|" . $this->imp->disable() . "-disable";
    }
}