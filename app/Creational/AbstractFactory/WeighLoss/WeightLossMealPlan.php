<?php

namespace App\Creational\AbstractFactory\WeighLoss;

use App\Creational\AbstractFactory\MealPlan;

class WeightLossMealPlan implements MealPlan
{

    public function print()
    {
        echo 'Here is your meal plan for Weight Loss!... </br>';
    }
}