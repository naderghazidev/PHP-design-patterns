<?php

namespace App\Structural\Adapter;

use App\Structural\Adapter\Gmail\GmailClient;

class GmailClientAdapter implements EmailProvider
{
    public function __construct(private GmailClient $client)
    {
    }

    public function downloadEmails()
    {
        $this->client->connect();
        $this->client->getEmails();
        $this->client->disconnect();
    }
}