<?php

namespace App\Structural\Adapter;

class EmailClient
{
    private array $providers = [];

    public function addProvider(EmailProvider $provider): void
    {
        $this->providers[] = $provider;
    }

    public function downloadEmails(): void
    {
        foreach ($this->providers as $provider) {
            $provider->downloadEmails();
        }
    }
}