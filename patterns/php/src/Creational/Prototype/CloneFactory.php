<?php


namespace App\Creational\Prototype;


class CloneFactory
{
    private array $clones = [];

    public function put(string $key, object $obj): void
    {
        $this->clones[$key] = $obj;
    }

    public function get(string $key): object
    {
        return clone $this->clones[$key];
    }
}