<?php

namespace App\Creational\Factory\Hijri;

use App\Creational\Factory\Calender;
use DateTime;

class HijriCalendar implements Calender
{

    public function addEvent(DateTime $dateTime)
    {
        echo "Added event to the Hijri calendar! it is scheduled for {$dateTime->getTimestamp()} </br>";
    }
}