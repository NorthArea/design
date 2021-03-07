<?php


namespace App\Behavioral\Iterator\Aggregate;


use App\Behavioral\Iterator\Aggregate\Contracts\AbstractIterator;

class Iterator extends AbstractIterator
{
    public function next(): void
    {
        $this->position ++;
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}