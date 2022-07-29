<?php

namespace App\Behavioral\ChainOfResponsibility;

class DataReaderFactory
{
    public static function getDataReaderChain(): DataReader
    {

        $excelReader = new ExcelReader();
        $numbersReader = new NumbersReader();
        $quickBooksReader = new QuickBooksReader();

        $quickBooksReader -> setNext($numbersReader);
        $numbersReader -> setNext($excelReader);

        return $quickBooksReader;
    }
}