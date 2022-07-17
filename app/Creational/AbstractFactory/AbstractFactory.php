<?php

namespace App\Creational\AbstractFactory;

use App\Creational\AbstractFactory\BuildMuscle\BuildMusclePlanFactory;
use App\Creational\AbstractFactory\StrengthTraining\StrengthTrainingPlanFactory;
use App\Creational\AbstractFactory\WeighLoss\WeightLossPlanFactory;

class AbstractFactory
{
    public function run(): void
    {
        $weightLossPlan=new WeightLossPlanFactory();
        $weightLossPlan->createMealPlan()->print();
        $weightLossPlan->createWorkoutPlan()->print();

        $buildMusclePlan=new BuildMusclePlanFactory();
        $buildMusclePlan->createMealPlan()->print();
        $buildMusclePlan->createWorkoutPlan()->print();

        $strengthTrainingPlan=new StrengthTrainingPlanFactory();
        $strengthTrainingPlan->createMealPlan()->print();
        $strengthTrainingPlan->createWorkoutPlan()->print();
    }
}