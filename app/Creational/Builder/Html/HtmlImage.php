<?php

namespace App\Creational\Builder\Html;

class HtmlImage implements HtmlElement
{

    public function __construct(private string $source)
    {
    }


    public function toString()
    {
        return "<img src=\"$this->source\" />";
    }
}