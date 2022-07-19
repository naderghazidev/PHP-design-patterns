<?php

namespace App\Structural\Bridge;

class Mac implements OperatingSystem
{

    public function getName(): string
    {
        return "Mac";
    }
}