<?php

namespace App\Creational\Builder;

class TextDocumentBuilder implements DocumentBuilder
{
    private string $result = '';

    public function addText(TextElement $element)
    {
        $this->result .= $element->getContent();
    }

    public function addImage(ImageElement $element)
    {
        // TODO: Implement addImage() method.
    }

    public function getResult(): string
    {
        return $this->result;
    }
}