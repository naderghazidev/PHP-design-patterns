<?php

namespace App\Creational\AbstractFactory\StrengthTraining;

use App\Creational\AbstractFactory\MealPlan;

class StrengthTrainingMealPlan implements MealPlan
{

    public function print()
    {
        echo 'Here is your meal plan for Strength Training!... </br>';
    }
}