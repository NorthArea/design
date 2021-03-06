<?php


namespace App\Structural\Adapter\Simple;


class Reader
{
    /**
     * @var PaperBook
     */
    private PaperBook $book;

    public function __construct(PaperBook $book)
    {
        $this->book = $book;
    }

    public function getText(): string
    {
        return $this->book->getText();
    }

    public function getPage(): int
    {
        return $this->book->getPage();
    }

    public function nextPage(): void
    {
        $this->book->nextPage();
    }
}