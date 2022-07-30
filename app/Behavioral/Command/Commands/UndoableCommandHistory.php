<?php

namespace App\Behavioral\Command\Commands;

class UndoableCommandHistory
{
    public array $commands = [];

    public function add(UndoableCommand $command): void
    {
        $this->commands[] = $command;
    }

    public function pop(): UndoableCommand
    {
        $lastCommand = end($this->commands);
        array_pop($this->commands);
        return $lastCommand;
    }

    public function canUndo(): bool
    {
        return count($this->commands) > 0;
    }
}