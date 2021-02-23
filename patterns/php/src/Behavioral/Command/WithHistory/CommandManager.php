<?php


namespace App\Behavioral\Command\WithHistory;


use App\Creational\AbstractSingleton;
use App\Behavioral\Command\WithHistory\Contracts\Command;
use SplStack;

/**
 * Class CommandManager
 * @package App\Structural\Command\WithHistory
 */
class CommandManager extends AbstractSingleton
{
    private SplStack $HistoryStack;
    private SplStack $UndoStack;

    protected function __construct()
    {
        $this->HistoryStack = new SplStack();
        $this->UndoStack = new SplStack();
    }

    public function execute(Command $command): void
    {
        $command->execute();
        $this->HistoryStack->push($command);
        $this->UndoStack = new SplStack();
    }

    public function undo(): void
    {
        if(!$this->HistoryStack->isEmpty()){
            $command = $this->HistoryStack->pop();
            $command->undo();
            $this->UndoStack->push($command);
        }
    }

    public function redo(): void
    {
        if(!$this->UndoStack->isEmpty()){
            $command = $this->UndoStack->pop();
            $command->execute();
            $this->HistoryStack->push($command);
        }
    }
}