<?php

namespace App\Creational\Prototype;

class TimeLine
{
    private array $components = [];

    public function add(Component $component): void
    {
        $this->components[] = $component;
    }

    public function render(): void
    {
        foreach ($this->components as $component) {
            echo $component->getContent() . "</br>";
        }
    }
}