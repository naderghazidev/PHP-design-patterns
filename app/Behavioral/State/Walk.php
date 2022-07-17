<?php

declare(strict_types=1);

namespace App\Behavioral\State;

class Walk implements Travelable
{

    public function calculateEta()
    {
        echo 'Calculating ETA (walking)';
    }

    public function calculateDirection()
    {
        echo 'Calculating Direction (walking)';
    }
}