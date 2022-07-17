<?php

namespace App\Creational\Factory;

use DateTime;

interface Calender
{
    public function addEvent(DateTime $dateTime);
}