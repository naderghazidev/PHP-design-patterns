<?php

namespace App\Creational\Builder;

use App\Creational\Builder\Html\HtmlDocument;
use App\Creational\Builder\Html\HtmlImage;
use App\Creational\Builder\Html\HtmlParagraph;

class HtmlDocumentBuilder implements DocumentBuilder
{
    private HtmlDocument $document;

    public function __construct()
    {
        $this->document = new HtmlDocument();
    }

    public function addText(TextElement $element)
    {
        $this->document->add(new HtmlParagraph($element->getContent()));
    }

    public function addImage(ImageElement $element)
    {
        $this->document->add(new HtmlImage($element->getSource()));
    }

    public function getResult(): string
    {
        return $this->document->toString();
    }
}