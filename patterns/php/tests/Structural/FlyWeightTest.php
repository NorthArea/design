<?php


namespace Test\Structural;


use App\Structural\FlyWeight\WordFactory;
use PHPUnit\Framework\TestCase;

class FlyWeightTest extends TestCase
{
    public function testMain(): void
    {
        $text = "Lorem ipsum dolor sit amet, consectetur amet elit. dolor Lorem faucibus tortor in";
        $array = explode(' ', $text);
        $words = [];
        foreach ($array as $item) {
            $words[] = WordFactory::getInstance()->get($item);
        }

        self::assertNotSameSize($words, array_unique($words));
        self::assertEquals($text, implode(" ", $words));
    }

}