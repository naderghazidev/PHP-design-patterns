<?php

namespace App\Creational\AbstractFactory\BuildMuscle;

use App\Creational\AbstractFactory\MealPlan;

class BuildMuscleMealPlan implements MealPlan
{
    public function print()
    {
        echo 'Here is your meal plan for Build Muscle!... </br>';
    }
}