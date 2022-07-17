<?php

declare(strict_types=1);

namespace App\Behavioral\State;

class Car implements Travelable
{

    public function calculateEta()
    {
        echo 'Calculating ETA (driving)';
    }

    public function calculateDirection()
    {
        echo 'Calculating Direction (driving)';
    }
}