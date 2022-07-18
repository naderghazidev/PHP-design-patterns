<?php

namespace App\Creational\Builder\Html;

class HtmlParagraph implements HtmlElement
{

    public function __construct(private string $text)
    {
    }


    public function toString()
    {
        return "<p> " . $this->text . "</p>";
    }
}