<?php


namespace App\Structural\FlyWeight;


use App\Creational\AbstractSingleton;

class WordFactory extends AbstractSingleton
{
    private array $words = [];

    public function get(string $text): Word
    {
        if(!isset($this->words[$text])){
            $this->words[$text] = new Word($text);
        }

        return $this->words[$text];
    }
}