<?php

namespace App\Behavioral\Command\Commands;

class UndoCommand implements Command
{

    public function __construct(private UndoableCommandHistory $history)
    {
    }

    public function execute()
    {
        if ($this->history->canUndo()) {
            $this->history->pop()->undo();
        } else {
            echo('No more Command to Undo! </br>');
        }
    }
}