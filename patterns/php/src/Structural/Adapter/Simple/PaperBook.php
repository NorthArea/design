<?php


namespace App\Structural\Adapter\Simple;


class PaperBook
{
    private int $page = 1;
    private string $text = 'Some text';

    public function getText(): string
    {
        return $this->text;
    }

    public function getPage(): int
    {
        return $this->page;
    }

    public function nextPage(): void
    {
        $this->page++;
    }
}