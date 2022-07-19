<?php

namespace App\Structural\Bridge;

class Chip implements Widget
{
    public function __construct(private OperatingSystem $operatingSystem)
    {
    }

    public function show()
    {
        echo 'show a chip for ' . $this->operatingSystem->getName().'</br>';
    }

    public function remove()
    {
        echo 'remove a chip for ' . $this->operatingSystem->getName().'</br>';
    }
}