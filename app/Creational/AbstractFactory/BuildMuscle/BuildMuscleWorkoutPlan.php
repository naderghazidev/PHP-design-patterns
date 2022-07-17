<?php

namespace App\Creational\AbstractFactory\BuildMuscle;

use App\Creational\AbstractFactory\WorkoutPlan;

class BuildMuscleWorkoutPlan implements WorkoutPlan
{

    public function print()
    {
        echo 'Here is your workout plan for Build Muscle!... </br>';
    }
}