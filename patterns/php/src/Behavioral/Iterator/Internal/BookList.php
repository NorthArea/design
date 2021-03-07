<?php


namespace App\Behavioral\Iterator\Internal;


class BookList
{
    private array $books = [];

    public function addBook(Book $book): self
    {
        $this->books[] = $book;
        return $this;
    }

    public function removeBook(Book $book): self
    {
        foreach ($this->books as $key => $bookInCollection) {
            if((string)$book === (string)$bookInCollection){
                unset($this->books[$key]);
            }
        }

        $this->books = array_values($this->books);
        return $this;
    }

    public function execute(callable $callback): void
    {
        $this->books = array_map($callback, $this->books);
    }
}