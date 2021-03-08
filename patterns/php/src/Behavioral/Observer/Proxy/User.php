<?php


namespace App\Behavioral\Observer\Proxy;


class User implements \App\Behavioral\Observer\Proxy\Constract\User
{
    private string $email = '';
    private string $name = '';

    public function setEmail(string $email): Constract\User
    {
        $this->email = $email;
        return $this;
    }

    public function setName(string $name): Constract\User
    {
        $this->name = $name;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getName(): string
    {
        return $this->name;
    }
}