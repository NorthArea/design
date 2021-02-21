<?php declare(strict_types=1);

namespace App\FactoryMethod\FactoryOne;

use App\FactoryMethod\Constracts\ProductB;

class ProductOneB implements ProductB
{

    public function getInt(): int
    {
        return 42;
    }
}