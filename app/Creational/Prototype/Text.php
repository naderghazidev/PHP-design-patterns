<?php

namespace App\Creational\Prototype;

class Text implements Component
{

    public function __construct(private string $content)
    {
    }

    public function getContent(): string
    {
        return $this->content;
    }


    public function clone(): Component
    {
        return new Text($this->content);
    }
}