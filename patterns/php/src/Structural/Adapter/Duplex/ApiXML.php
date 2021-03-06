<?php


namespace App\Structural\Adapter\Duplex;


class ApiXML
{
    public function __construct(string $url)
    {

    }

    public function getContent(): string
    {
        return "SomeXML";
    }
}