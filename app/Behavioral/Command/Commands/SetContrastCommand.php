<?php

namespace App\Behavioral\Command\Commands;

use App\Behavioral\Command\VideoEditor;

class SetContrastCommand implements UndoableCommand
{

    private float $previousContrast;

    public function __construct(private VideoEditor $editor, private UndoableCommandHistory $history, private string $contrast)
    {

    }

    public function execute()
    {
        $this->previousContrast = $this->editor->getContrast();
        $this->editor->setContrast($this->contrast);
        $this->history->add($this);
    }

    public function undo()
    {
        $this->editor->setContrast($this->previousContrast);
    }
}