<?php

declare(strict_types=1);

namespace App\State;

class Transit implements Travelable
{

    public function calculateEta()
    {
        echo 'Calculating ETA (transit)';
    }

    public function calculateDirection()
    {
        echo 'Calculating Direction (transit)';
    }
}