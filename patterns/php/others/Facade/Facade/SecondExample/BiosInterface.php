<?php


namespace App\Facade\SecondExample;


interface BiosInterface
{
    public function execute();

    public function waitForKeyPress();

    public function launch(OperatingSystemInterface $os);

    public function powerDown();
}