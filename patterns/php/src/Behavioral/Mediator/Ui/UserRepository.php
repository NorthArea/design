<?php


namespace App\Behavioral\Mediator\Ui;


use App\Behavioral\Mediator\Ui\Contracts\Colleague;

class UserRepository extends Colleague
{
    public function getUserName(string $user): string
    {
        return 'User: ' . $user;
    }
}