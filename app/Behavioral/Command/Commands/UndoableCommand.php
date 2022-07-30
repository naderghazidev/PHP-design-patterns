<?php

namespace App\Behavioral\Command\Commands;

interface UndoableCommand extends Command
{
    public function undo();
}