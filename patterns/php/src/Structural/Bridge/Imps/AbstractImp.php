<?php


namespace App\Structural\Bridge\Imps;


abstract class AbstractImp
{
    abstract public function enable(): string;
    abstract public function disable(): string;
    abstract public function wait(): string;
    abstract public function do(): string;
}