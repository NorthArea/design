<?php declare(strict_types=1);

namespace App\Creational\FactoryMethod\FactoryOne;

use App\Creational\FactoryMethod\Contracts\Product;

class ProductOne implements Product
{
    public function getString(): string
    {
        return "ProductOne";
    }
}