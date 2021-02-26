<?php


namespace App\Others\Delegation;


interface IDelegate
{
    public function getClass(): string;
    public function setReceiver(Receiver $receiver);
}