<?php

namespace App\Behavioral\ChainOfResponsibility;

class QuickBooksReader extends DataReader
{

    public function doRead(string $fileName)
    {
        if (str_ends_with($fileName, '.qbw')) {
            echo("Reading data from a QuickBooks file. </br>");
        }
    }

    public function getExtension(): string
    {
        return '.qbw';
    }
}