<?php

namespace App\Creational\AbstractFactory\BuildMuscle;

use App\Creational\AbstractFactory\AbstractPlanFactory;
use App\Creational\AbstractFactory\MealPlan;
use App\Creational\AbstractFactory\WorkoutPlan;

class BuildMusclePlanFactory implements AbstractPlanFactory
{

    public function createWorkoutPlan(): WorkoutPlan
    {
        return new BuildMuscleWorkoutPlan();
    }

    public function createMealPlan(): MealPlan
    {
        return new BuildMuscleMealPlan();
    }
}