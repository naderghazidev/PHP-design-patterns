<?php

namespace App\Creational\Builder;


class Document
{
    private array $elements = [];

    public function add(Element $element): void
    {
        $this->elements[] = $element;
    }

    public function export(DocumentBuilder $document)
    {
        foreach ($this->elements as $element) {
            if ($element instanceof ImageElement) {
                $document->addImage($element);
            } elseif ($element instanceof TextElement) {
                $document->addText($element);
            }
        }

        print_r($document->getResult());
    }
}