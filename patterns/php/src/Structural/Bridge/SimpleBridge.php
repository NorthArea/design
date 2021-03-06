<?php


namespace App\Structural\Bridge;


use App\Structural\Bridge\Imps\AbstractImp;

abstract class SimpleBridge
{
    /**
     * @var AbstractImp
     */
    protected AbstractImp $imp;

    public function __construct(AbstractImp $imp)
    {
        $this->imp = $imp;
    }

    public function setImplementor(AbstractImp $imp): void
    {
        $this->imp = $imp;
    }
}