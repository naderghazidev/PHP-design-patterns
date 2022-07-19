<?php

namespace App\Structural\Bridge;

class Bridge
{
    public function run(): void
    {
        $windowsButton = new Button(new Windows());
        $windowsButton->show();
        $windowsButton->remove();

        $MacButton = new Button(new Mac());
        $MacButton->show();
        $MacButton->remove();

        $windowsChip = new Chip(new Windows());
        $windowsChip->show();
        $windowsChip->remove();

        $macChip = new Chip(new Mac());
        $macChip->show();
        $macChip->remove();
    }

}