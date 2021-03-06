<?php


namespace Test\Structural;


use App\Structural\Adapter\Simple\PaperBook;
use App\Structural\Adapter\Simple\PaperWebSiteAdapter;
use App\Structural\Adapter\Simple\Reader;
use App\Structural\Adapter\Simple\WebSite;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testMain(): void
    {
        $book = new PaperBook();
        $reader = new Reader($book);
        self::assertIsString($reader->getText());
        $reader->nextPage();
        self::assertEquals(2, $reader->getPage());

        $web = new WebSite();
        $reader = new Reader(new PaperWebSiteAdapter($web));
        self::assertIsString($reader->getText());
        $reader->nextPage();
        self::assertEquals(2, $reader->getPage());
    }

}