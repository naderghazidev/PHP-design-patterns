<?php

namespace App\Creational\AbstractFactory;

interface AbstractPlanFactory
{
    public function createWorkoutPlan();

    public function createMealPlan();
}