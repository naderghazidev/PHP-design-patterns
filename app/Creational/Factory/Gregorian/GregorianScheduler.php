<?php

namespace App\Creational\Factory\Gregorian;

use App\Creational\Factory\Calender;
use App\Creational\Factory\Scheduler;

class GregorianScheduler extends Scheduler
{

    protected function createCalendar(): Calender
    {
        return new GregorianCalendar();
    }
}