<?php


namespace App\Structural\Adapter\Simple;


class WebSite
{
    private string $content = 'Some text';

    public function getContent(): string
    {
        return $this->content;
    }

    public function request(string $url): void
    {
    }
}