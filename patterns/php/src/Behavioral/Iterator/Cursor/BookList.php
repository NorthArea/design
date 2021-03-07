<?php


namespace App\Behavioral\Iterator\Cursor;


use Countable;
use Iterator;

class BookList implements Countable, Iterator
{
    private array $books = [];
    private int $currentIndex = 0;

    public function addBook(Book $book): BookList
    {
        $this->books[] = $book;
        return $this;
    }

    public function removeBook(Book $book): BookList
    {
        foreach ($this->books as $key => $bookInCollection) {
            if((string)$book === (string)$bookInCollection){
                unset($this->books[$key]);
            }
        }

        $this->books = array_values($this->books);
        return $this;
    }

    public function current(): ?Book
    {
        return $this->books[$this->currentIndex];
    }

    public function next(): void
    {
        $this->currentIndex++;
    }

    public function key(): int
    {
        return $this->currentIndex;
    }

    public function valid(): bool
    {
        return isset($this->books[$this->currentIndex]);
    }

    public function rewind(): void
    {
        $this->currentIndex = 0;
    }

    public function count(): int
    {
        return count($this->books);
    }
}