<?php


namespace App\Structural\Bridge;


use App\Structural\Bridge\Imps\AbstractImp;
use App\Structural\Bridge\Imps\ImpOne;
use App\Structural\Bridge\Imps\ImpTwo;

class FactoryImp
{
    protected function createImpOne(): AbstractImp
    {
        return new ImpOne();
    }

    protected function createImpTwo(): AbstractImp
    {
        return new ImpTwo();
    }

    public function getImpOne(): AbstractImp
    {
        return $this->createImpOne();
    }

    public function getImpTwo(): AbstractImp
    {
        return $this->createImpTwo();
    }
}