<?php declare(strict_types=1);

namespace App\Creational\Builder;

use App\Creational\Builder\Contracts\Builder;
use App\Creational\Builder\Contracts\Product;

class Director
{
    /**
     * @var Builder
     */
    private Builder $builder;

    public function __construct(Builder $builder)
    {
        $this->builder= $builder;
    }

    public function setBuilder(Builder $builder): void
    {
        $this->builder= $builder;
    }

    public function make(): Product
    {
        return $this->builder->get();
    }
}