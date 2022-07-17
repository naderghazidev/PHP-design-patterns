<?php

namespace App\Creational\Factory\jalali;

use App\Creational\Factory\Calender;
use App\Creational\Factory\Scheduler;

class JalaliScheduler extends Scheduler
{

    protected function createCalendar(): Calender
    {
        return new JalaliCalendar();
    }
}