<?php

namespace App\Behavioral\ChainOfResponsibility;

class ExcelReader extends DataReader
{

    public function doRead(string $fileName)
    {
        if (str_ends_with($fileName, ".xls")) {
            echo("Reading data from an Excel spreadsheet. </br>");
        }

    }

    public function getExtension(): string
    {
        return '.xls';
    }
}