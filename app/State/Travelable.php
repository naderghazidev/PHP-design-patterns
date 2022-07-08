<?php

namespace App\State;

interface Travelable
{
    public function calculateEta();
    public function calculateDirection();
}