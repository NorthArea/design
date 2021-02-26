<?php


namespace App\Others\Delegation;


class Receiver
{
    /**
     * @var IDelegate
     */
    private IDelegate $delegate;

    public function __construct(IDelegate $delegate)
    {
        $delegate->setReceiver($this);
        $this->delegate = $delegate;
    }

    public function getClass(): string
    {
        return $this->delegate->getClass();
    }
}