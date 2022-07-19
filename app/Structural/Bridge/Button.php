<?php

namespace App\Structural\Bridge;

class Button implements Widget
{

    public function __construct(private OperatingSystem $operatingSystem)
    {

    }

    public function show()
    {
        echo 'show the button for ' . $this->operatingSystem->getName().'</br>';
    }

    public function remove()
    {
        echo 'remove the button for ' . $this->operatingSystem->getName().'</br>';
    }
}