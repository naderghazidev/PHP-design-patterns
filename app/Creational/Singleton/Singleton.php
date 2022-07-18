<?php

namespace App\Creational\Singleton;

class Singleton
{
    public function run(): void
    {
        $logger = Logger::getInstance();
        $logger->log("hello!");
    }
}