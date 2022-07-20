<?php

namespace App\Structural\Composite;

class Truck implements Unit
{
    public function deploy()
    {
        echo("Deploying a truck </br>");
    }
}