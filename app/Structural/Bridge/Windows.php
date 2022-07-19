<?php

namespace App\Structural\Bridge;

class Windows implements OperatingSystem
{
    public function getName(): string
    {
        return "Windows";
    }
}