<?php

namespace App\Creational\Prototype;

class ContextMenu
{

    public function __construct(private Timeline $timeline)
    {

    }

    public function duplicate(Component $component): void
    {
        $clonedObject = $component->clone();
        $this->timeline->add($clonedObject);
    }
}