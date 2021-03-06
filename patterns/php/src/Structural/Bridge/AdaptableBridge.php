<?php


namespace App\Structural\Bridge;


use App\Structural\Bridge\Imps\AbstractImp;

abstract class AdaptableBridge
{
    /**
     * @var Imps\AbstractImp
     */
    protected Imps\AbstractImp $imp;

    public function __construct(array $array)
    {
        $factory = new FactoryImp();

        if(count($array) < 3) {
            $this->imp = $factory->getImpOne();
        } else {
            $this->imp = $factory->getImpTwo();
        }
    }
}