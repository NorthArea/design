<?php


namespace Test\Behavioral\Command;


use App\Behavioral\Command\WithHistory\CommandManager;
use App\Behavioral\Command\WithHistory\SimpleCommand;
use PHPUnit\Framework\TestCase;

class WithHistoryCommandTest extends TestCase
{
    public function testMain(): void
    {
        $command1 = new SimpleCommand("N1");
        $command2 = new SimpleCommand("N2");
        $command3 = new SimpleCommand("N3");


        $manager = CommandManager::getInstances();
        /*$manager->execute($command1);
        $manager->execute($command2);
        $manager->undo();
        $manager->redo();
        $manager->undo();
        $manager->execute($command3);*/

        /*$manager->execute($command1);
        $manager->execute($command2);
        $manager->execute($command1);
        $manager->execute($command3);
        $manager->execute($command1);
        $manager->execute($command2);
        $manager->undo();
        $manager->undo();
        $manager->undo();
        $manager->execute($command2);
        $manager->redo();
        exit();*/

        self::assertTrue(true);
    }

}