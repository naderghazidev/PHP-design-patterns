<?php

namespace App\TemplateMethod;

abstract class Window
{
    protected abstract function beforeClose();

    public function close()
    {
        $this->beforeClose();
        echo("Removing the window from the screen");
        $this->afterClose();
    }

    protected abstract function afterClose();
}