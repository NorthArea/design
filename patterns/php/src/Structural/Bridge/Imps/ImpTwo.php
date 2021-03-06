<?php


namespace App\Structural\Bridge\Imps;


class ImpTwo extends AbstractImp
{
    public function enable(): string
    {
        return __CLASS__;
    }

    public function disable(): string
    {
        return __CLASS__;
    }

    public function wait(): string
    {
        return __CLASS__;
    }

    public function do(): string
    {
        return __CLASS__;
    }
}