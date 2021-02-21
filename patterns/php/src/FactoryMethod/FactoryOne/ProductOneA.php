<?php declare(strict_types=1);

namespace App\FactoryMethod\FactoryOne;

use App\FactoryMethod\Constracts\ProductA;

class ProductOneA implements ProductA
{

    public function getString(): string
    {
        return "ProductOneA";
    }
}