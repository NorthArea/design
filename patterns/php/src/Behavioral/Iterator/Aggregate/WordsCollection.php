<?php


namespace App\Behavioral\Iterator\Aggregate;


use App\Behavioral\Iterator\Aggregate\Contracts\AbstractIterator;
use App\Behavioral\Iterator\Aggregate\Contracts\Collection;

class WordsCollection implements Collection
{
    private array $items;

    public function addItem($item): self
    {
        $this->items[] = $item;
        return $this;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function getIterator(): AbstractIterator
    {
        return new Iterator($this);
    }

    public function getReversIterator(): AbstractIterator
    {
        return new ReversIterator($this);
    }
}