<?php


namespace App\Behavioral\Iterator\Cursor;


class Book
{
    private string $author;
    private string $title;
    private string $text;

    public function __construct(string $author, string $title, string $text)
    {
        $this->author = $author;
        $this->title = $title;
        $this->text = $text;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function __toString(): string
    {
        return md5($this->author . $this->title . $this->text);
    }


}