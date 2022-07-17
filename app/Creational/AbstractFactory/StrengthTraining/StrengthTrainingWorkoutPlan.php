<?php

namespace App\Creational\AbstractFactory\StrengthTraining;

use App\Creational\AbstractFactory\WorkoutPlan;

class StrengthTrainingWorkoutPlan implements WorkoutPlan
{
    public function print()
    {
        echo 'Here is your workout plan for Strength Training!... </br>';
    }
}