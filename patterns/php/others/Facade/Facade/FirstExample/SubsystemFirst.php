<?php


namespace App\Facade\FirstExample;


class SubsystemFirst
{
    public function operation(): string
    {
        return "Run: " . __CLASS__;
    }
}