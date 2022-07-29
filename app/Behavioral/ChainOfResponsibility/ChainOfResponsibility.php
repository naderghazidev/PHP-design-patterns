<?php

namespace App\Behavioral\ChainOfResponsibility;

use Exception;

class ChainOfResponsibility
{
    /**
     * @throws Exception
     */
    public function run(): void
    {
        $reader = DataReaderFactory::getDataReaderChain();
        $reader->read("data.xls");
        $reader->read("data.numbers");
        $reader->read("data.qbw");
        $reader->read("data.jpg");
    }
}