<?php

namespace App\Creational\Singleton;

class Logger
{
    private static ?Logger $logger = null;

    private function __construct()
    {
    }

    public static function getInstance(): Logger
    {
        if (static::$logger === null) {
            static::$logger = new Logger();
        }
        return static::$logger;
    }

    public function log(string $message): void
    {
        echo $message;
    }
}