<?php

namespace App\Structural\Composite;

class HumanResource implements Unit
{
    public function deploy()
    {
        echo("Deploying a human resource </br>");
    }
}