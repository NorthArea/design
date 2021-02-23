<?php


namespace App\Creational;


use stdClass;

class SimpleFactory
{
    public function createObject(): stdClass
    {
        return new stdClass();
    }
}