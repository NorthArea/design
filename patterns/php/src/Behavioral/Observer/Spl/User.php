<?php


namespace App\Behavioral\Observer\Spl;


use SplObserver;
use SplSubject;

class User implements SplSubject
{
    private string $email;
    private string $name;
    private array $observers;

    public function __construct(string $email, string $name)
    {
        $this->email = $email;
        $this->name = $name;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        $this->notify();
        return $this;
    }

    public function setName(string $name) :self
    {
        $this->name = $name;
        $this->notify();
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

    public function attach(SplObserver $observer): self
    {
        $this->observers[] = $observer;
        return $this;
    }

    public function detach(SplObserver $observer): self
    {
        foreach ($this->observers as $key => $attached) {
            if ($attached === $observer) {
                unset($this->observers[$key]);
            }
        }

        return $this;
    }

    public function notify(): void
    {
        foreach ($this->observers as $key => $attached) {
            $attached->update($this);
        }
    }
}