<?php


namespace App\Others\Delegation;


class ConcreteDelegate implements IDelegate
{
    /**
     * @var Receiver
     */
    private Receiver $receiver;

    public function getClass(): string
    {
        return __CLASS__ . "|" . get_class($this->receiver);
    }

    public function setReceiver(Receiver $receiver)
    {
        $this->receiver = $receiver;
    }
}