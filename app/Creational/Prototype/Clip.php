<?php

namespace App\Creational\Prototype;

class Clip implements Component
{

    public function __construct(private string $clipPath)
    {
    }

    public function clone(): Component
    {
        return new Clip($this->clipPath);
    }

    public function getContent(): string
    {
        return $this->clipPath;
    }
}