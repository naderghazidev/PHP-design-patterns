<?php

namespace App\Structural\Composite;

class Team implements Unit
{
    private array $resources = [];

    public function add(object $resource)
    {
        $this->resources[] = $resource;
    }

    public function deploy()
    {
        foreach ($this->resources as $resource) {
            $resource->deploy();
        }
    }
}