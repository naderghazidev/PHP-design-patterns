<?php

namespace App\Creational\AbstractFactory\WeighLoss;

use App\Creational\AbstractFactory\AbstractPlanFactory;
use App\Creational\AbstractFactory\MealPlan;
use App\Creational\AbstractFactory\WorkoutPlan;

class WeightLossPlanFactory implements AbstractPlanFactory
{

    public function createWorkoutPlan(): WorkoutPlan
    {
        return new WeightLossWorkoutPlan();
    }

    public function createMealPlan(): MealPlan
    {
        return new WeightLossMealPlan();
    }
}