<?php declare(strict_types=1);

namespace App\Builder\Contracts;

interface Builder
{
    public function setPartA(): Builder;
    public function setPartB(): Builder;
    public function setPartC(): Builder;
    public function get(): Product;
}