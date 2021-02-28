<?php


namespace App\Creational\FactoryMethod\ParamsMethod;


use App\Creational\FactoryMethod\Contracts\IProduct;
use App\Creational\FactoryMethod\ProductA;
use App\Creational\FactoryMethod\ProductB;

class CreatorWithParams extends AbstractCreator
{
    public const IPRODUCTA = 2;
    public const IPRODUCTB = 3;

    public function createProduct(int $id): IProduct
    {
        if ($id === self::IPRODUCTA) {
            return new ProductA();
        }

        if($id === self::IPRODUCTB) {
            return new ProductB();
        }

        return parent::createProduct($id);
    }
}