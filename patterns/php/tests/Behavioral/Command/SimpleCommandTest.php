<?php


namespace Test\Behavioral\Command;


use App\Behavioral\Command\Simple\ComplexCommand;
use App\Behavioral\Command\Simple\HelloReceiver;
use App\Behavioral\Command\Simple\Invoker;
use App\Behavioral\Command\Simple\SimpleCommand;
use PHPUnit\Framework\TestCase;

class SimpleCommandTest extends TestCase
{
    public $text = "world";

    public function setUp(): void
    {
        parent::setUp();

        $receiver = new HelloReceiver();

        $command1 = new SimpleCommand();
        $command2 = new ComplexCommand($receiver, $this->text);

        $invoker = Invoker::getInstance();
        $invoker->setCommand($command1);
        $invoker->setCommand($command2);
    }


    public function testMain(): void
    {

        $invoker = Invoker::getInstance();
        $invoker->executeCommand();

        self::assertEquals($this->text, $this->text);
    }

}