<?php

namespace App\Creational\Factory\jalali;

use App\Creational\Factory\Calender;
use DateTime;

class JalaliCalendar implements Calender
{
    public function addEvent(DateTime $dateTime)
    {
        echo "Added event to the Jalali calendar! it is scheduled for {$dateTime->getTimestamp()} </br>";
    }
}