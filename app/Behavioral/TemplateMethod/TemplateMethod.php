<?php

namespace App\Behavioral\TemplateMethod;

class TemplateMethod
{
    public function run()
    {
        $window = new MainWindow();
        $window->close();
    }
}