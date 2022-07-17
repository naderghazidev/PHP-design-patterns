<?php

namespace App\Behavioral\TemplateMethod;

class MainWindow extends Window
{

    protected function beforeClose()
    {
        echo('process before closing...<br/>');
    }

    protected function afterClose()
    {
        echo('<br/>process after closing...');
    }
}