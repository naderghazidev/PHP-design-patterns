<?php

namespace App\Behavioral\Command;

use App\Behavioral\Command\Commands\RemoveTextCommand;
use App\Behavioral\Command\Commands\SetContrastCommand;
use App\Behavioral\Command\Commands\SetTextCommand;
use App\Behavioral\Command\Commands\UndoableCommandHistory;
use App\Behavioral\Command\Commands\UndoCommand;

class Command
{
    public function run(): void
    {
        $videoEditor = new VideoEditor();
        $history = new UndoableCommandHistory();

        echo($videoEditor->toString());

        $setTextCommand = new SetTextCommand($videoEditor, $history, "our very first text!");
        $setTextCommand->execute();
        echo($videoEditor->toString());

        $removeTextCommand = new RemoveTextCommand($videoEditor, $history);
        $removeTextCommand->execute();
        echo($videoEditor->toString());

        $setContrastCommand = new SetContrastCommand($videoEditor, $history, 0.9);
        $setContrastCommand->execute();
        echo($videoEditor->toString());

        $undoCommand = new UndoCommand($history);

        echo('undo 1 </br>');
        $undoCommand->execute();
        echo($videoEditor->toString());

        echo('undo 2 </br>');
        $undoCommand->execute();
        echo($videoEditor->toString());

        echo('undo 3 </br>');
        $undoCommand->execute();
        echo($videoEditor->toString());

        echo('undo 4 </br>');
        $undoCommand->execute();
    }
}