<?php

namespace App\Behavioral\Command\Commands;

use App\Behavioral\Command\VideoEditor;

class RemoveTextCommand implements UndoableCommand
{

    private string $previousText;

    public function __construct(private VideoEditor $editor, private UndoableCommandHistory $history)
    {

    }

    public function execute()
    {
        $this->previousText = $this->editor->getText();
        $this->editor->removeText();
        $this->history->add($this);
    }

    public function undo()
    {
        $this->editor->setText($this->previousText);
    }
}