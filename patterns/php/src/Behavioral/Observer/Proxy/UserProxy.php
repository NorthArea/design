<?php


namespace App\Behavioral\Observer\Proxy;


use App\Behavioral\Observer\Proxy\Constract\User;
use SplObjectStorage;
use SplObserver;
use SplSubject;

class UserProxy implements \App\Behavioral\Observer\Proxy\Constract\User, SplSubject
{
    /**
     * @var User
     */
    private User $user;
    private SplObjectStorage $storage;

    public function __construct(User $user)
    {
        $this->user = $user;
        $this->storage = new SplObjectStorage();
    }

    public function setEmail(string $email): Constract\User
    {
        $this->user->setEmail($email);
        $this->notify();
        return $this;
    }

    public function setName(string $name): Constract\User
    {
        $this->user->setName($name);
        $this->notify();
        return $this;
    }

    public function getEmail(): string
    {
        return $this->user->getEmail();
    }

    public function getName(): string
    {
        return $this->user->getName();
    }

    public function attach(SplObserver $observer)
    {
        $this->storage->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->storage->detach($observer);
    }

    public function notify()
    {
        foreach ($this->storage as $item) {
            $item->update($this);
        }
    }
}