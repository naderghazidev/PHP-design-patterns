<?php

namespace App\Creational\Prototype;

class Prototype
{
    public function run(): void
    {
        $timeline = new TimeLine();

        $text = new Text("a nice text");
        $audio = new Audio("a nice audio");
        $clip = new Clip("a nice clip");

        $timeline->add($text);
        $timeline->add($audio);
        $timeline->add($clip);

        $contextMenu = new ContextMenu($timeline);

        $contextMenu->duplicate($text);
        $contextMenu->duplicate($audio);
        $contextMenu->duplicate($clip);

        $timeline->render();
    }
}