<?php

namespace App\Creational\Factory\Gregorian;

use App\Creational\Factory\Calender;
use DateTime;

class GregorianCalendar implements Calender
{

    public function addEvent(DateTime $dateTime)
    {
        echo "Added event to the Gregorian calendar! it is scheduled for {$dateTime->getTimestamp()} </br>";
    }
}