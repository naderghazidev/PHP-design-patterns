<?php

namespace App\Strategy;

class Strategy
{
    public function run()
    {
        $chatClient = new ChatClient(new AESEncryptor());
        $chatClient->send("a new message");
    }
}