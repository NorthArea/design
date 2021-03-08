<?php


namespace App\Behavioral\Observer\Spl;


use SplObserver;
use SplSubject;

class UserObserver implements SplObserver
{
    public string $email = '';

    public function update(SplSubject $subject): void
    {
        $this->email = $subject->getEmail();
    }
}