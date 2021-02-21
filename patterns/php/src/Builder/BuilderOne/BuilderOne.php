<?php declare(strict_types=1);

namespace App\Builder\BuilderOne;

use App\Builder\Contracts\Builder;
use App\Builder\Contracts\Product;

class BuilderOne implements Builder
{
    /**
     * @var ProductOne
     */
    private ProductOne $product;

    public function __construct()
    {
        $this->product = new ProductOne();
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

    public function get(): ProductOne
    {
        return $this->product;
    }
}