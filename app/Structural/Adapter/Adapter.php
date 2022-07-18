<?php

namespace App\Structural\Adapter;

use App\Structural\Adapter\Gmail\GmailClient;

class Adapter
{
    public function run(): void
    {
        $client = new EmailClient();
        $gmailClient = new GmailClientAdapter(new GmailClient());
        $client->addProvider($gmailClient);
        $client->downloadEmails();
    }
}