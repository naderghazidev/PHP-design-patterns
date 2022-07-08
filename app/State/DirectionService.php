<?php

declare(strict_types=1);

namespace App\State;

class DirectionService
{
    public function __construct(private Travelable $travelable)
    {
    }

    public function getEta()
    {
        $this->travelable->calculateEta();
    }

    public function getDirection()
    {
        $this->travelable->calculateDirection();
    }

    public function getTravelMode():Travelable
    {
        return $this->travelable;
    }
}