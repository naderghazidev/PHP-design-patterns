<?php

namespace App\Behavioral\Command\Commands;

use App\Behavioral\Command\VideoEditor;

class SetTextCommand implements UndoableCommand
{

    private string $previousText;

    public function __construct(private VideoEditor $editor, private UndoableCommandHistory $history, private string $text)
    {

    }

    public function execute()
    {
        $this->previousText = $this->editor->getText();
        $this->editor->setText($this->text);
        $this->history->add($this);
    }

    public function undo()
    {
        $this->editor->setText($this->previousText);
    }
}