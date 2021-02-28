<?php


namespace App\Creational\FactoryMethod\ParamsMethod;


use App\Creational\AbstractSingleton;
use App\Creational\FactoryMethod\Contracts\IProduct;
use App\Creational\FactoryMethod\MyProduct;
use RuntimeException;

abstract class AbstractCreator extends AbstractSingleton
{
    public const IPRODUCT = 1;

    public function createProduct(int $id): IProduct
    {
        if($id === self::IPRODUCT){
            return new MyProduct();
        }

        throw new RuntimeException('Not found');
    }
}