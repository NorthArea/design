<?php


namespace App\Behavioral\Iterator\Aggregate;


use App\Behavioral\Iterator\Aggregate\Contracts\AbstractIterator;

class ReversIterator extends AbstractIterator
{
    public function next(): void
    {
        $this->position --;
    }

    public function rewind(): void
    {
        $this->position = count($this->collection->getItems()) - 1;
    }
}