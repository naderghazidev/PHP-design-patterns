<?php

namespace App\Behavioral\Strategy;

class AESEncryptor implements Encryptor
{

    public function encrypt()
    {
        echo("Encrypting message using AES");
    }
}