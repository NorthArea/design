<?php


namespace App\Facade\FirstExample;


class SubsystemSecond
{
    public function operation(): string
    {
        return "Run: " . __CLASS__;
    }
}