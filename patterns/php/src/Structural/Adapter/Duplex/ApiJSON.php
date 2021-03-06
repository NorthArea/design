<?php


namespace App\Structural\Adapter\Duplex;


class ApiJSON
{
    public function getContent(string $url, string $payload): string
    {
        return "jsonContent";
    }
}