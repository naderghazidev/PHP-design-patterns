<?php

namespace App\Creational\Prototype;

interface Component
{
    public function getContent(): string;

    public function clone(): Component;
}