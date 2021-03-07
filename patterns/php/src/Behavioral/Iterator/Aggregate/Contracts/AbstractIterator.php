<?php


namespace App\Behavioral\Iterator\Aggregate\Contracts;


use Iterator;
use IteratorAggregate;

abstract class AbstractIterator implements Iterator
{
    protected IteratorAggregate $collection;
    protected int $position = 0;

    public function __construct(IteratorAggregate $aggregate)
    {
        $this->collection = $aggregate;
    }

    public function current()
    {
        return $this->collection->getItems()[$this->position];
    }

    public function key(): int
    {
        return $this->position;
    }

    public function valid(): bool
    {
        return isset($this->collection->getItems()[$this->position]);
    }
}