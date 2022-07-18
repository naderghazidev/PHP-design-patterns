<?php

namespace App\Creational\Builder\Html;

class HtmlDocument
{
    private array $elements = [];

    public function add(HtmlElement $element): void
    {
        $this->elements[] = $element;
    }


    public function toString()
    {

        $builder = "<html>";
        foreach ($this->elements as $element) {
            $builder .= $element->toString();
        }
        $builder .= "</html>";
        return $builder;
    }
}