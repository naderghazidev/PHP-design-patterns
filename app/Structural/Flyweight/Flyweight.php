<?php

namespace App\Structural\Flyweight;

class Flyweight
{
    public function run(){
        $sheet = new SpreadSheet();
        $sheet->setContent(0, 0, "Hello");

        $sheet->setContent(1, 0, "World");
        $sheet->setFontFamily(0, 0, "Arial");
        $sheet->render();
    }
}