<?php


namespace App\Facade\FirstExample;


class Facade
{
    private SubsystemFirst $first;
    private SubsystemSecond $second;

    public function __construct()
    {
        $this->first = new SubsystemFirst();
        $this->second = new SubsystemSecond();
    }
    public function run():void
    {
        echo $this->first->operation();
        echo "\n";
        echo $this->second->operation();
    }
}