<?php

namespace App\Structural\Decorator;

class Decorator
{
    public function run(): void
    {
        $editor = new Editor();
        $editor->openProject("...");
    }
}