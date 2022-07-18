<?php

namespace App\Creational\Prototype;

class Audio implements Component
{

    public function __construct(private string $audioPath)
    {
    }

    public function clone(): Component
    {
        return new Audio($this->audioPath);
    }

    public function getContent(): string
    {
        return $this->audioPath;
    }
}