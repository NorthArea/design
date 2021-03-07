<?php


namespace App\Behavioral\Iterator\Aggregate\Contracts;


use IteratorAggregate;

interface Collection extends IteratorAggregate
{
    public function getItems(): array;
    public function addItem($item);
    public function getIterator(): AbstractIterator;
    public function getReversIterator(): AbstractIterator;
}