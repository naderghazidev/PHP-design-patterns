<?php

declare(strict_types=1);

namespace App\Behavioral\State;

class State
{

    public function run()
    {
        $directionService=new DirectionService(new Bicycle());
        $directionService->getDirection();
        $directionService->getEta();
    }
}