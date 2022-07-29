<?php

namespace App\Behavioral\ChainOfResponsibility;

class NumbersReader extends DataReader
{

    public function doRead(string $fileName)
    {
        if (str_ends_with($fileName, '.numbers')) {
            echo("Reading data from a Numbers spreadsheet. </br>");
        }
    }

    public function getExtension(): string
    {
        return '.numbers';
    }
}