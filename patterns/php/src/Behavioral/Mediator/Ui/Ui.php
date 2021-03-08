<?php


namespace App\Behavioral\Mediator\Ui;


use App\Behavioral\Mediator\Ui\Contracts\Colleague;

class Ui extends Colleague
{
    public function outputUserInfo(string $username)
    {
        return $this->mediator->getUser($username);
    }
}