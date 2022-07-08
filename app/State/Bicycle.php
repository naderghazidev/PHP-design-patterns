<?php

declare(strict_types=1);

namespace App\State;

class Bicycle implements Travelable
{

    public function calculateEta()
    {
        echo 'Calculating ETA (bicycling)';
    }

    public function calculateDirection()
    {
        echo 'Calculating Direction (bicycling)';
    }
}