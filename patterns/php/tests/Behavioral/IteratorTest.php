<?php


namespace Test\Behavioral;


use App\Behavioral\Iterator\Aggregate\WordsCollection;
use App\Behavioral\Iterator\Cursor\Book;
use App\Behavioral\Iterator\Cursor\BookList;
use App\Behavioral\Iterator\Internal\Book as InternalBook;
use App\Behavioral\Iterator\Internal\BookList as InternalBookList;
use PHPUnit\Framework\TestCase;

class IteratorTest extends TestCase
{
    public function testCursor(): void
    {
        $books = [
            new Book("author0", "title0", "text0"),
            new Book("author1", "title1", "text1"),
            new Book("author2", "title2", "text2")
        ];
        $bookList = new BookList();
        $bookList->addBook($books[0])->addBook($books[1])->addBook($books[2]);

        $newBooks = [];
        foreach ($bookList as $key => $book) {
            $newBooks[$key] = $book;
        }
        self::assertEquals($books, $newBooks);
        self::assertCount(3, $bookList);
        $bookList->removeBook($books[0])->removeBook($books[1])->removeBook($books[2]);
        self::assertCount(0, $bookList);
    }

    public function testAggregate(): void
    {
        $array0 = ['First', 'Second', 'Third'];
        $collection = new WordsCollection();
        $collection->addItem($array0[0])->addItem($array0[1])->addItem($array0[2]);

        $array1 = [];
        foreach ($collection as $item) {
            $array1[] = $item;
        }
        self::assertEquals($array0, $array1);

        $array2 = [];
        foreach ($collection->getIterator() as $item) {
            $array2[] = $item;
        }
        self::assertEquals($array0, $array2);

        $array3 = [];
        foreach ($collection->getReversIterator() as $item) {
            $array3[] = $item;
        }

        self::assertEquals($array0, array_reverse($array3));
    }

    public function testInternal(): void
    {
        $books = [
            new InternalBook("author0", "title0", "text0"),
            new InternalBook("author1", "title1", "text1"),
            new InternalBook("author2", "title2", "text2")
        ];
        $bookList = new InternalBookList();
        $bookList->addBook($books[0])->addBook($books[1])->addBook($books[2]);

        $bookList->execute(static function ($book) {

        });
        self::assertTrue(true);
    }


}