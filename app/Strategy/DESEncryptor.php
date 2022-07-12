<?php

namespace App\Strategy;

class DESEncryptor implements Encryptor
{

    public function encrypt()
    {
        echo("Encrypting message using DES");
    }
}