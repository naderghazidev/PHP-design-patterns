<?php

namespace App\Creational\Builder;

class TextElement implements Element
{
    public function __construct(private string $string)
    {

    }

    public function getContent()
    {
        return $this->string;
    }
}