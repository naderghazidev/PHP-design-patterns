<?php

namespace App\Behavioral\Strategy;

class ChatClient
{

    public function __construct(private Encryptor $encryptor)
    {
    }

    public function send(string $message)
    {
        $this->encryptor->encrypt();
        echo '<br/>';
        echo("Sending the encrypted message...");
    }
}