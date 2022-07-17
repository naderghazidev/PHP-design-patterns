<?php

namespace App\Creational\AbstractFactory\WeighLoss;

use App\Creational\AbstractFactory\WorkoutPlan;

class WeightLossWorkoutPlan implements WorkoutPlan
{
    public function print()
    {
        echo 'Here is your workout plan for Weight Loss!... </br>';
    }
}