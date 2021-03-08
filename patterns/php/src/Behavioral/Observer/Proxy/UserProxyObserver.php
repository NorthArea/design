<?php


namespace App\Behavioral\Observer\Proxy;


use SplObserver;
use SplSubject;

class UserProxyObserver implements SplObserver
{
    public string $email = '';
    public string $name = '';

    public function update(SplSubject $subject)
    {
        $this->email = $subject->getEmail();
        $this->name = $subject->getName();
    }
}