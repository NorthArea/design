<?php


namespace App\Creational\Prototype;


class ComplicatedCloneObj
{
    private bool $isInitialize = false;
    private object $object;

    public function initialize(object $object): void
    {
        if($this->isInitialize === false){
            //do something
            $this->object = $object;
            $this->isInitialize = true;
        }
    }
}