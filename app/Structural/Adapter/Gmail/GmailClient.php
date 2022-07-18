<?php

namespace App\Structural\Adapter\Gmail;

class GmailClient
{
    public function connect(): void
    {
        echo("Connecting to Gmail </br>");
    }

    public function getEmails(): void
    {
        echo("Downloading emails from Gmail </br>");
    }

    public function disconnect(): void
    {
        echo("Disconnecting from Gmail </br>");
    }
}