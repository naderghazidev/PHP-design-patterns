<?php

namespace App\Behavioral\State;

interface Travelable
{
    public function calculateEta();
    public function calculateDirection();
}