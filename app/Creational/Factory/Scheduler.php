<?php

namespace App\Creational\Factory;

use DateTime;

abstract class Scheduler
{
    public function schedule(): void
    {
        $calendar = $this->createCalendar();
        $today = new DateTime();
        $calendar->addEvent($today);
    }

    protected abstract function createCalendar(): Calender;
}