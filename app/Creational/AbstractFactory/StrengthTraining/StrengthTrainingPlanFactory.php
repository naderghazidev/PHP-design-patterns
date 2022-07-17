<?php

namespace App\Creational\AbstractFactory\StrengthTraining;

use App\Creational\AbstractFactory\AbstractPlanFactory;
use App\Creational\AbstractFactory\MealPlan;
use App\Creational\AbstractFactory\WorkoutPlan;

class StrengthTrainingPlanFactory implements AbstractPlanFactory
{

    public function createWorkoutPlan(): WorkoutPlan
    {
        return new StrengthTrainingWorkoutPlan();
    }

    public function createMealPlan(): MealPlan
    {
        return new StrengthTrainingMealPlan();
    }
}