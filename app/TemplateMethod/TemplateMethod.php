<?php

namespace App\TemplateMethod;

class TemplateMethod
{
    public function run()
    {
        $window = new MainWindow();
        $window->close();
    }
}