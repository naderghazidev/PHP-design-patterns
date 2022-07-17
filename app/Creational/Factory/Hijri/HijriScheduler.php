<?php

namespace App\Creational\Factory\Hijri;

use App\Creational\Factory\Calender;
use App\Creational\Factory\Scheduler;

class HijriScheduler extends Scheduler
{

    protected function createCalendar(): Calender
    {
        return new HijriCalendar();
    }
}