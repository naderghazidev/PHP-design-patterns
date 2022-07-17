<?php

namespace App\Creational\Factory;

use App\Creational\Factory\Gregorian\GregorianScheduler;
use App\Creational\Factory\Hijri\HijriScheduler;
use App\Creational\Factory\jalali\JalaliScheduler;

class Factory
{
    public function run(): void
    {
        $hijriScheduler = new HijriScheduler();
        $hijriScheduler->schedule();

        $gregorianScheduler = new GregorianScheduler();
        $gregorianScheduler->schedule();

        $jalaliScheduler = new JalaliScheduler();
        $jalaliScheduler->schedule();
    }
}