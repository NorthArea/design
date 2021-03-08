<?php


namespace App\Behavioral\Observer\Proxy\Constract;


interface User
{
    public function setEmail(string $email): self;
    public function setName(string $name): self;
    public function getEmail(): string;
    public function getName(): string;
}