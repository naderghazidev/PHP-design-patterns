<?php

namespace App\Behavioral\ChainOfResponsibility;

use Exception;

abstract class DataReader
{
    private DataReader $dataReader;

    /**
     * @throws Exception
     */
    final function read(string $filename)
    {
        if (str_ends_with($filename, $this->getExtension())) {
            $this->doRead($filename);
            return;
        }

        if (isset($this->dataReader)) {
            $this->dataReader->read($filename);
        } else {
            echo('File format not supported! </br>');
        }
    }

    public function setNext(DataReader $dataReader)
    {
        $this->dataReader = $dataReader;
    }

    public abstract function doRead(string $fileName);

    public abstract function getExtension(): string;
}