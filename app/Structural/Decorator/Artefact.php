<?php

namespace App\Structural\Decorator;

class Artefact implements AbstractArtefact
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }


    public function render(): string
    {
        return $this->name;
    }
}