<?php

namespace App\Creational\Builder;

class ImageElement implements Element
{
    public function __construct(private string $source)
    {

    }

    public function getSource()
    {
        return $this->source;
    }
}