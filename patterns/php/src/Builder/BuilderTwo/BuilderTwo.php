<?php declare(strict_types=1);

namespace App\Builder\BuilderTwo;

use App\Builder\Contracts\Builder;
use App\Builder\Contracts\Product;

class BuilderTwo implements Builder
{
    /**
     * @var ProductTwo
     */
    private ProductTwo $product;

    public function __construct()
    {
        $this->product = new ProductTwo();
    }

    public function setPartA(): Builder
    {
        return $this;
    }

    public function setPartB(): Builder
    {
        return $this;
    }

    public function setPartC(): Builder
    {
        return $this;
    }

    public function get(): Product
    {
        return $this->product;
    }
}